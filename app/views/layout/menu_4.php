<?php
$menu_4 = '
<table width="100%" cellspacing="4">
    <tr class="menu">
        <td ' . (($_SERVER["REQUEST_URI"] == "/" || $_SERVER["REQUEST_URI"] == "/home") ? 'id="selected"' : '') . '>
            <a href="/home">Trang Chủ</a>
        </td>
        <td ' . (($_SERVER["REQUEST_URI"] == "/gioi-thieu") ? 'id="selected"' : '') . '>
            <a href="/gioi-thieu">Giới Thiệu</a>
        </td>
        <td ' . (($_SERVER["REQUEST_URI"] == "/dien-dan") ? 'id="selected"' : '') . '>
            <a href="/dien-dan" title="Diễn Đàn">Diễn Đàn</a>
        </td>
        <td>
            <a href="' . $UrlFage . '">Fanpage</a>
        </td>
    </tr>
</table>';

$menu_2 = '
<table width="100%" cellspacing="2">
    <tr class="menu">
        <td ' . (($_SERVER["REQUEST_URI"] == "/" || $_SERVER["REQUEST_URI"] == "/home") ? 'id="selected"' : '') . '>
            <a href="/home">Trang Chủ</a>
        </td>
        <td ' . (($_SERVER["REQUEST_URI"] == "/dien-dan") ? 'id="selected"' : '') . '>
            <a href="/dien-dan" title="Diễn Đàn">Diễn Đàn</a>
        </td>
    </tr>
</table>';
    


?>
