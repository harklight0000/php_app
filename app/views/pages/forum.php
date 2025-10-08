<div class="bg-content" style="min-width: 200px">
	<?php if ( empty($_SESSION['user']['player']['name']) ): ?>
		<div class="row-center">
			<button type="button" class="button-a" onclick="window.location.href='/login'">Đăng nhập</button>
			<button type="button" class="button-a" onclick="window.location.href='/register'">Đăng ký</button>
		</div>
	<?php else: ?>
		<table style="margin-left: auto; margin-right: auto; text-align: left">
			<tbody>
				<tr>
					<td></td>
					<td colspan="5" align="center">
					
						<span>
							<img src="/assets/images/avatar/<?= $_SESSION['user']['player']['avatar_id'] ?? 1209 ?>.png"/>
							<br />
							<b style="color: #ad4105;">
								<?= htmlspecialchars($_SESSION['user']['player']['name'] ?? 'Chưa đặt tên' . $_SESSION['user']['player']['vnd']) ?>
							</b>
							
							<br />
							<button type="button" class="button-a" onclick="window.location.href='/logout'">Thoát</button>
							<button type="button" class="button-a" onclick="window.location.href='/re-passwd'">Đổi MK</button>
							<button type="button" class="button-a" onclick="window.location.href='/forgot-passwd'">Quên MK</button>
						</span>
					
					</td>
				</tr>
			</tbody>
		</table>
	<?php endif; ?>	
</div>
<div class="bg-content">
  <div class="box_topsss" style="background-color: transparent">
    <span >
      <div class="pagination">
        <a
          class="pagelink"
          href="?for=forum&amp;do=setting&amp;uid=3&amp;sz=15&amp;p=0"
          >&lt;</a
        >
        <a
          class="pagelink"
          href="?for=forum&amp;do=setting&amp;uid=3&amp;sz=15&amp;p=0"
          >1</a
        >
        <span class="pagecurrent">2</span>
        <a
          class="pagelink"
          href="?for=forum&amp;do=setting&amp;uid=3&amp;sz=15&amp;p=2"
          >3</a
        >
        <a
          class="pagelink"
          href="?for=forum&amp;do=setting&amp;uid=3&amp;sz=15&amp;p=3"
          >4</a
        >
        <a
          class="pagelink"
          href="?for=forum&amp;do=setting&amp;uid=3&amp;sz=15&amp;p=2"
          >&gt;</a
        >
      </div></span
    >
  </div>
</div>


