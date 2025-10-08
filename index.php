<?php
require_once __DIR__ . '/app/bootstrap.php';
require_once __DIR__ . '/app/auth.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
$path = rtrim($path, '/');
if ($path === '') $path = '/';

switch ($path) {
  case '/':
  case '/home':
    render_view('home');
    break;
  case '/about':
    render_view('about');
    break;
  case '/forum':
    render_view('forum',);
    break;
  case '/login':
    Auth::handleLogin();
    break;
  case '/register':
    Auth::handleRegister();
    break;
  case '/wrong-login':
    Auth::showWrongLogin();
    break;
  case '/logout':
    Auth::handleLogout();
    break;  
  case '/reset-pass':
    render_view('reset-pass');
    break;
  case '/dieu-khoan-su-dung':
    render_view('dieu-khoan-su-dung');
    break;
  case '500':
    http_response_code(500);
    render_view('500');
    break;
  default:
    http_response_code(404);
    render_view('404');
    break;
}
