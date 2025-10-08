<?php
declare(strict_types=1);

class Auth
{
    private const MAX_ATTEMPTS = 5;
 
  
  

    public static function currentUser(): ?array
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        return $_SESSION['user'] ?? null;
    }

    public static function requireAuth(): void
    {
        if (!self::currentUser()) {
            header('Location: /login');
            exit;
        }
    }


    public static function showLogin(array $data = []): void
    {
        render_view('login', $data);
    }

    public static function handleLogin(): void
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        $_SESSION['wrong_login'] = $_SESSION['wrong_login'] ?? 0;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            global $mysqli; 
            $user = trim($_POST['user'] ?? '');
            $pass = $_POST['pass'] ;
        
            $stmt = $mysqli->prepare("SELECT id, username, password FROM `account` WHERE username = ? LIMIT 1");
            if (!$stmt) {
                throw new RuntimeException('Prepare failed: ' . $mysqli->error);
            }
            $stmt->bind_param("s", $user);
            $stmt->execute();
            $result = $stmt->get_result(); 
            $row = $result ? $result->fetch_assoc() : null;
            $stmt->close();

        
            $ok = $row && ($row['password'] === $pass);

            if ($ok) {
              
                self::loadUserSessionByUsername($user);


                $_SESSION['wrong_login'] = 0;
                session_write_close();
                if( empty($_SESSION['user']['player']['name']) ) {
                    render_view('blank', ['message' => "Bạn cần vào game để tạo nhân vật trước khi có thể đăng nhập diễn đàn!"]);
                    exit;
                }  
                render_view('forum'); 
                exit;            
            }

      
            $_SESSION['wrong_login'] = (int)$_SESSION['wrong_login'] + 1;
            session_write_close();
            header('Location: /wrong-login');
            exit;
        }

        render_view('login');
    }


    public static function handleRegister(): void
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        global $mysqli;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user    = trim($_POST['user'] ?? '');
            $pass    = $_POST['pass'] ?? '';
            $re_pass = $_POST['re-pass'] ?? '';

            if ($user === '' || $pass === '' || $re_pass === '') {
                render_view('register', ['error' => '*Vui lòng nhập đầy đủ thông tin.']);
                return;
            }
            if (strlen($user) > 20) { 
                render_view('register', ['error' => '*Tên đăng nhập quá dài, không vượt quá 20 ký tự.']);
                return;
            }
            if ($pass !== $re_pass) {
                render_view('register', ['error' => '*Mật khẩu nhập lại không khớp.']);
                return;
            }

            $stmt = $mysqli->prepare("SELECT id FROM `account` WHERE username = ? LIMIT 1");
            $stmt->bind_param("s", $user);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->close();
                render_view('register', ['error' => '*Tên đăng nhập đã tồn tại.']);
                return;
            }
            $stmt->close();

            $stmt = $mysqli->prepare("INSERT INTO `account` (`username`, `password`, `create_time`) VALUES (?, ?, ?)");
            $create_time = date('Y-m-d H:i:s');
            $stmt->bind_param("sss", $user, $pass, $create_time);
            $ok = $stmt->execute();
            $newId = $stmt->insert_id;
            $stmt->close();

            if ($ok) {
                render_view('blank', ['message' => "Đăng ký tài khoản $user thành công. Chúc bạn chơi game vui vẻ!"]);
               
                exit;
            }

            render_view('register', ['error' => 'Đăng ký thất bại, vui lòng thử lại.']);
            return;
        }

        render_view('register');
    }


    private static function loadUserSessionByUsername(string $username): void {
        $_SESSION['user'] = null;
        global $mysqli;

        $sql = "SELECT 
                    a.id        AS account_id,
                    a.username  AS username,
                    a.vnd       AS vnd,
                    p.name      AS player_name,
                    h.avatar_id AS avatar_id
                FROM account a
                LEFT JOIN player       p ON a.id = p.account_id
                LEFT JOIN head_avatar  h ON p.head = h.head_id
                WHERE a.username = ?
                LIMIT 1";

        $stmt = $mysqli->prepare($sql);
        if (!$stmt) throw new RuntimeException('Prepare failed: '.$mysqli->error);

        $stmt->bind_param("s", $username);
        $stmt->execute();

        $stmt->store_result();
        $stmt->bind_result($account_id, $uname, $vnd, $player_name, $avatar_id);

        $has = $stmt->num_rows > 0;
        if ($has) $stmt->fetch();
        $stmt->close();

        $_SESSION['user'] = [
            'id'     => $has ? (int)$account_id : null,
            'name'   => $has ? $uname : $username,
            'vnd'    => $has ? $vnd : 0,
            'player' => [
                'name'      => $has ? $player_name : "Chưa đặt tên",
                'avatar_id' => $has ? $avatar_id   : 1290,
            ],
        ];

    }

    public static function showWrongLogin(): void
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        $wrong = (int)($_SESSION['wrong_login'] ?? 0);
        render_view('wrong-login', ['wrong_login' => $wrong]);
    }

    public static function handleLogout(): void
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        $_SESSION = [];
        if (ini_get('session.use_cookies')) {
            $p = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
        }
        session_destroy();
        header('Location: /forum');
        exit;
    }
}
