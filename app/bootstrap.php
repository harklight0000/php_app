<?php
// Common bootstrap: config, session, helpers
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// App config (migrated from Controller/Controller.php)
$Name_Server = "Ngọc Rồng Online";
$Title_Server = "Chú Bé Rồng Onlines - Ngọc Rồng Online";
$keywords = "Chú Bé Rồng Online,ngoc rong mobile, game ngoc rong, game 7 vien ngoc rong, game bay vien ngoc rong";
$description = "Website chính thức của Chú Bé Rồng Online – Game Bay Vien Ngoc Rong Mobile nhập vai trực tuyến trên máy tính và điện thoại về Game 7 Viên Ngọc Rồng hấp dẫn nhất hiện nay!";

$pc = "http://dl.teamobi.com/drive/get/ZR";
$android = "http://dl.teamobi.com/drive/get/Z3";
$iphone = "https://ios.gomobi.vn/game-ngoc-rong-online";
$jar = "";

$UrlFage = "https://www.facebook.com/ngoc.rong.online.9/";

// Define base paths
$APP_BASE_PATH = __DIR__;
$VIEW_PATH = __DIR__ . '/views';
$LAYOUT_PATH = $VIEW_PATH . '/layout';
$PAGES_PATH = $VIEW_PATH . '/pages';

// Simple view renderer
function render_view(string $page, array $data = []): void {
    global $LAYOUT_PATH, $PAGES_PATH;
    extract($data);
    $pageFile = $PAGES_PATH . '/' . $page . '.php';
    if (!file_exists($pageFile)) {
        $pageFile = $PAGES_PATH . '/404.php';
    }
    include $LAYOUT_PATH . '/header.php';
    include $pageFile;
    include $LAYOUT_PATH . '/footer.php';
}
