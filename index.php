<?php
require __DIR__ . '/app/bootstrap.php';
require __DIR__ . '/app/auth.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = rtrim($path, '/');
if ($path === '') {
    $path = '/';
}

switch ($path) {
    case '/':
    case '/trang-chu':
        render_view('trang-chu');
        break;

    case '/gioi-thieu':
        render_view('gioithieu');
        break;

    case '/dieu-khoan-su-dung':
        render_view('dieu-khoan-su-dung');
        break;

    default:
        http_response_code(404);
        render_view('404');
        break;
}
