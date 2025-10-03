<?php
require 'Controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $Title_Server ?></title>
    <meta name="keywords" content="<?php echo $keywords ?>" />
    <meta name="description" content="<?php echo $description ?>" />
    <meta http-equiv="refresh" content="600" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="google-site-verification" content="6qO7Kk56gy30r79_RQfg5gQ8JPFkicokmkEdFDZXiyU" />

    <link rel="apple-touch-icon" href="images/favicon-48x48.ico" />
    <link rel="icon" href='../Assets/Images/favicon-48x48.ico' type="image/x-icon" />
    <link rel="shortcut icon" href='../Assets/images/favicon-48x48.ico' type="image/x-icon" />
    <link rel="icon" href="../Assets/images/favicon-48x48.ico">
    <link rel="icon" type="image/png" href="../Assets/images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../Assets/images/favicon-64x64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="../Assets/images/favicon-128x128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="../Assets/images/favicon-48x48.png" sizes="48x48">
    <!-- Css -->
    <link rel="stylesheet" href="../Assets/css/template.css.css">
    <link rel="stylesheet" href="../Assets/css/eff.css.css">

</head>

<body>
    <div class="snowEffect">
        <canvas id="snowcanvas" height="100%" width="100%"></canvas>

    </div>
    <div style="position: relative;" class="body_body">
        <a href="index.html@c=skill.html#" id="backTop"><img id='backTopimg' src='images/favicon-32x32.png' alt='top' />
        </a>

        <div class="div-12">
            <img height=12 src="18-1.png" style="vertical-align: middle;" />
            <span style="vertical-align: middle;">Chơi quá 180 phút một ngày sẽ ảnh hưởng xấu đến sức khỏe.
            </span>
        </div>
        <div class="left_top"></div>
        <div class="bg_top">
            <div class="right_top"></div>
        </div>

        <div class="body-content">
            <div class="bg-content2">
                <h1 class="a">
                    <a href="index.html" title="game bảy viên Chú Bé Rồng Online">
                        <img height=90 src="../Assets/images/logo_ChuBeRong_s.png"
                            alt="game bảy viên Chú Bé Rồng Online" /></a>
                </h1>
                <div id="top">
                    <div class="link-more">
                        <div class="h">
                            <div class="bg_noel"></div>
                            <div class="menu2">
                                <table width="100%" cellspacing="4">
                                    <tr class="menu">
                                        <td <?php if ($_SERVER['REQUEST_URI'] == "/trang-chu")
                                            echo 'id="selected"'; ?>>
                                            <a href="/trang-chu">Trang Chủ</a>
                                        </td>
                                        <td <?php if ($_SERVER['REQUEST_URI'] == "/gioi-thieu")
                                            echo 'id="selected"'; ?>>
                                            <a href="/gioi-thieu">Giới Thiệu</a>
                                        </td>
                                        <td <?php if ($_SERVER['REQUEST_URI'] == "/dien-dan")
                                            echo 'id="selected"'; ?>>
                                            <a href="/dien-dan" title="Diễn Đàn">Diễn Đàn</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo $UrlFage ?>">Fanpage</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                                type="b0e1867ca77e058aaeec4468-text/javascript"></script>
                            <script src="../Assets/JavaScript/animation.js"></script>
                            <script src="../Assets/JavaScript/Snow3d.js"></script>
                            <script src="../Assets/JavaScript/js-info.js"></script>
                            <script src="../Assets/JavaScript/ThreeCanvas.js"></script>
                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    let currentPath = window.location.pathname; // vd: /gioi-thieu
                                    let links = document.querySelectorAll(".menu2 a");

                                    links.forEach(link => {
                                        if (link.getAttribute("href") === currentPath) {
                                            link.parentElement.id = "selected"; // gắn id cho <td>
                                        }
                                    });
                                });
                            </script>
                            <!-- data-cf-settings="b0e1867ca77e058aaeec4468-|49" defer></script> -->
</body>

</html>