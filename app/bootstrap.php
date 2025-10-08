<?php
declare(strict_types=1);

/**
 * app/bootstrap.php
 * - Khởi tạo session
 * - Cấu hình chung (site meta, đường dẫn)
 * - Kết nối MySQLi (utf8mb4)
 * - Handler lỗi 500 (DEV/PROD)
 * - Helpers: url(), asset(), render_view()
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* ================== ENV / DEBUG ================== */
define('APP_DEBUG', true); // Để false trên production!

if (APP_DEBUG) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
}

/* ================== SITE META ================== */
$Name_Server  = "Ngọc Rồng Online";
$Title_Server = "Chú Bé Rồng Online - Ngọc Rồng Online";
$keywords     = "Chú Bé Rồng Online, ngoc rong mobile, game ngoc rong, game 7 vien ngoc rong, game bay vien ngoc rong";
$description  = "Website chính thức của Chú Bé Rồng Online – Game nhập vai trực tuyến về 7 Viên Ngọc Rồng.";

$pc      = "http://dl.teamobi.com/drive/get/ZR";
$android = "http://dl.teamobi.com/drive/get/Z3";
$iphone  = "https://ios.gomobi.vn/game-ngoc-rong-online";
$jar     = "http://dl.teamobi.com/drive/get/ZR";
$UrlFage = "https://www.facebook.com/ngoc.rong.online.9/";

/* ================== PATHS ================== */
$APP_BASE_PATH = __DIR__;
$VIEW_PATH     = $APP_BASE_PATH . '/views';
$LAYOUT_PATH   = $VIEW_PATH . '/layout';
$PAGES_PATH    = $VIEW_PATH . '/pages';


const DB_HOST = '127.0.0.1';
const DB_NAME = 'dragonboy';
const DB_USER = 'root';
const DB_PASS = '';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($mysqli->connect_errno) {
    throw new RuntimeException("Failed to connect to MySQL: " . $mysqli->connect_error);
}
$mysqli->set_charset('utf8mb4');

/* ================== 500 RENDERER ================== */
/**
 * Không dùng render_view trong handler lỗi để tránh loop,
 * chỉ include trực tiếp views/pages/500.php
 */
function show_500(?Throwable $e = null): void
{
    http_response_code(500);

    if (!headers_sent()) {
        header('Content-Type: text/html; charset=UTF-8');
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Pragma: no-cache');
    }

    $debug        = defined('APP_DEBUG') && APP_DEBUG;
    $errorMessage = $e ? (get_class($e) . ': ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine()) : '';
    $errorTrace   = $e ? $e->getTraceAsString() : '';

    include __DIR__ . '/views/pages/500.php';
    exit;
}

set_exception_handler(function (Throwable $e) {
    error_log($e->getMessage() . ' @ ' . $e->getFile() . ':' . $e->getLine() . "\n" . $e->getTraceAsString());
    show_500($e);
});

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
  
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

register_shutdown_function(function () {
    $err = error_get_last();
    if ($err && in_array($err['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR], true)) {
        $e = new ErrorException($err['message'], 0, $err['type'], $err['file'], $err['line']);
        error_log($e->getMessage() . ' @ ' . $e->getFile() . ':' . $e->getLine());
        show_500($e);
    }
});


$BASE_URL = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($BASE_URL === '') $BASE_URL = '/';

function url(string $path = '/'): string
{
    global $BASE_URL;
    $path = '/' . ltrim($path, '/');
    return ($BASE_URL === '/') ? $path : $BASE_URL . $path;
}

function asset(string $path): string
{
    return url('assets/' . ltrim($path, '/'));
}


function render_view(string $page, array $data = []): void
{
    global $LAYOUT_PATH, $PAGES_PATH,
           $Name_Server, $Title_Server, $keywords, $description,
           $pc, $android, $iphone, $jar, $UrlFage;

  
    $shared = compact(
        'Name_Server', 'Title_Server', 'keywords', 'description',
        'pc', 'android', 'iphone', 'jar', 'UrlFage'
    );

   
    $vars = array_replace($shared, $data);
    extract($vars, EXTR_OVERWRITE);

 
    $pageFile = $PAGES_PATH . '/' . $page . '.php';
    if (!is_file($pageFile)) {
        $pageFile = $PAGES_PATH . '/404.php';
        http_response_code(404);
    }

  
    include $LAYOUT_PATH . '/header.php';
    include $pageFile;
    include $LAYOUT_PATH . '/footer.php';
}
function php_alert(string $msg): void {
    $safe = htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
    echo "<script>window.alert('{$safe}');</script>";
}
function php_alert_redirect(string $msg, string $url): void {
    echo "<script>
      alert(" . json_encode($msg) . ");
      window.location.href = " . json_encode($url) . ";
    </script>";
    exit;
}
function toVnShort($value) {
    $n = abs((float)$value);
    $suffix = "";
    $num = $value;

    if ($n < 1000) {
        return (string)$value;
    } elseif ($n < 1000000) {
        $num = $value / 1000.0;
        $suffix = "k";
    } elseif ($n < 1000000000) {
        $num = $value / 1000000.0;
        $suffix = "tr";
    } else {
        $num = $value / 1000000000.0;
        $suffix = "tỷ";
    }

    // chỉ giữ 1 số thập phân
    $formatted = number_format($num, 1, '.', '');

    // loại bỏ đuôi ".0"
    if (substr($formatted, -2) === '.0') {
        $formatted = substr($formatted, 0, -2);
    }

    return $formatted . $suffix;
}
