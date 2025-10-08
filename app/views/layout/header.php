<?php ?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($Title_Server ?? '') ?></title>
  <meta name="keywords" content="<?= htmlspecialchars($keywords ?? '') ?>">
  <meta name="description" content="<?= htmlspecialchars($description ?? '') ?>">
  <meta http-equiv="refresh" content="600">
  <meta name="robots" content="INDEX,FOLLOW">


  <link rel="icon" href="/assets/images/favicon-48x48.ico" type="image/x-icon">
  <link rel="icon" type="image/png" href="/assets/images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/assets/images/favicon-64x64.png" sizes="64x64">
  <link rel="icon" type="image/png" href="/assets/images/favicon-128x128.png" sizes="128x128">
  <link rel="icon" type="image/png" href="/assets/images/favicon-48x48.png" sizes="48x48">

  <!-- <link rel="stylesheet" href="/assets/css/w3.css"> -->
  <link rel="stylesheet" href="/assets/css/style.css">
  

  <div class="snowEffect">
    <canvas id="snowcanvas" height="100%" width="100%"></canvas>
  </div>

  <div style="position: relative;" class="body_body">
    <a href="#backTop" id="backTop"><img id="backTopimg" src="/assets/images/favicon-32x32.png" alt="top" /></a>

    <div class="div-12">
      <img height="12" src="/assets/images/18-1.png" style="vertical-align: middle;" />
      <span style="vertical-align: middle;">Chơi quá 180 phút một ngày sẽ ảnh hưởng xấu đến sức khỏe.</span>
    </div>
    <div class="left_top"></div>
    <div class="bg_top">
      <div class="right_top"></div>
    </div>
    <div class="body-content">
      <div class="bg-content2">
        <h1 class="a">
          <a href="/" title="game bảy viên Chú Bé Rồng Online">
            <img height="90" src="/assets/images/logo_ChuBeRong_s.png" alt="game bảy viên Chú Bé Rồng Online" />
          </a>
        </h1>
        <div id="top">
          <div class="link-more">
            <div class="h">
              <div class="bg_noel"></div>
              <div class="menu2">
                <table width="100%" cellspacing="4">
                  <tr class="menu">
                    <td <?php if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/home") echo 'id="selected"'; ?>>
                      <a href="/home">Trang Chủ</a>
                    </td>
                    <td <?php if ($_SERVER['REQUEST_URI'] == "/about") echo 'id="selected"'; ?>>
                      <a href="/about">Giới Thiệu</a>
                    </td>
                    <td <?php if ($_SERVER['REQUEST_URI'] == "/forum") echo 'id="selected"'; ?>>
                      <a href="/forum" title="Diễn Đàn">Diễn Đàn</a>
                    </td>
                    <td>
                      <a href="<?php echo $UrlFage; ?>">Fanpage</a>
                    </td>
                  </tr>
                </table>
              </div>

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
              <script src="/assets/js/animation.js"></script>
              <script src="/assets/js/Snow3d.js"></script>
              <script src="/assets/js/js-info.js"></script>
              <script src="/assets/js/ThreeCanvas.js"></script>
              <script>
                document.addEventListener("DOMContentLoaded", function () {
                  const currentPath = window.location.pathname;
                  const links = document.querySelectorAll(".menu2 a");
                  links.forEach(link => {
                    if (link.getAttribute("href") === currentPath) {
                      link.parentElement.id = "selected";
                    }
                  });
                });
              </script>
            </div>
          </div>
        </div>
