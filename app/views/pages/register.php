<div class="bg-content" style="text-align:center">
  <div style="font-size:10px;">Sử dụng tài khoản Chú Bé Rồng Online để đăng ký.</div>
  <center>
    <form action="/register" method="POST" name="register" class="login_form">
      <table>
        <tr>
          <td colspan="2"><label for="user">SĐT / Email:</label></td>
          <td colspan="2">
            <input name="user" id="user" type="text"
                   value="<?= htmlspecialchars($_POST['user'] ?? ($old['user'] ?? '')) ?>">
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="pass">Mật khẩu:</label></td>
          <td colspan="2">
            <input name="pass" id="pass" type="password" value="">
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="re-pass">Nhập lại mật khẩu:</label></td>
          <td colspan="2">
            <input name="re-pass" id="re-pass" type="password" value="">
          </td>
        </tr>
      </table>
			<?php if (!empty($error)): ?>
				<div class="alert-error">
					<?= htmlspecialchars($error) ?>
				</div>
    	<?php endif; ?>
      <button type="submit" class="button-a">Đăng ký</button><br>
    </form>

    <br>
  </center>
</div>
