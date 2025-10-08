<div class="bg-content" style="text-align:center">
  <div style="font-size:10px;">Sử dụng tài khoản để đăng nhập.</div>
  <center>
    <?php if (!empty($error)): ?>
      <p style="color:#c00;margin:6px 0;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form action="/login" method="POST" name="login" class="login_form">
      <table>
        <tr>
          <td><label for="user">SĐT / Email:</label></td>
          <td><input name="user" type="text" value="<?= htmlspecialchars($_POST['user'] ?? '') ?>"></td>
        </tr>
        <tr>
          <td><label for="pass">Mật khẩu:</label></td>
          <td><input name="pass" type="password"></td>
        </tr>
      </table>
      <?php if (!empty($message)): ?>
				<div class="alert-error">
					<?= htmlspecialchars($message) ?>
				</div>
    	<?php endif; ?>
      
      <button type="submit" class="button-a">Đăng nhập</button>
    </form>

    <p style="font-size:10px;margin-top:8px;">
      <a href="/resetpass">Quên mật khẩu</a>
    </p>
  </center>
</div>
