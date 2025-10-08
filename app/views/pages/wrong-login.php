<div class="bg-content">Đăng nhập không thành công.<br>
  <ul>
    <li>Tên đăng nhập hoặc mật khẩu không chính xác</li>
    <li style="color:red">Bạn Đã Đăng Nhập Sai Lần:
      <?= (int)($wrong_login ?? 0) ?> (vui lòng không spam đăng nhập)
    </li>
    <li style="color:red">Tài Khoản của Bạn Sẽ Bị Khóa Đăng Nhập Nếu Đăng Nhập Sai 5 lần</li>
  </ul>
  <a href="/login">Quay lại trang đăng nhập</a>
  <br>
</div>
