<?php
include __DIR__ . "/../Controller/header.php";
?>
<div class="bg_top_22">
    <img src="../Assets/Images/banner_Summer.png" width="100%">
</div>
</div>
</div>
</div>
<div class="download">
    <div class="bg-content text-center">
        <div id="columns" style="text-align:center">
            <?php if ($jar != null) { ?>
                <figure>
                    <a href="http://dlworld.teamobi.com/?type=1" target="_blank"> <img height="35" src="../Assets/images/jar.png"
                            alt="CHÚ BÉ RỒNG ONLINE"></a>
                    <br>
                    </a>
                    <figcaption><span style="color:rgb(209, 9, 50);"></span> - <a href="
        " onclick="if (!window.__cfRLUnblockHandlers) return false; openWinjad()" title="CHÚ BÉ RỒNG ONLINE" target="_blank"
                            data-cf-modified-b0e1867ca77e058aaeec4468-="">
                            JAR
                        </a>

                        <br> <br>
                    </figcaption>
                </figure>
            <?php } ?>

            <figure>
                <a href="<?php echo $android ?>" title="CHÚ BÉ RỒNG ONLINE">
                    <img height="35" src="../Assets/Images/android.png" alt="CHÚ BÉ RỒNG ONLINE">
                </a>
                <figcaption><span style="color:rgb(209, 9, 50);">246</span>
                    <br>
                    <a href="">Hướng dẫn cài</a>
                </figcaption>
            </figure>
            <figure>
                <a href="<?php echo $pc ?>" title="CHÚ BÉ RỒNG ONLINE">
                    <img height="35" src="../Assets/images/pc.png" alt="CHÚ BÉ RỒNG ONLINE">
                </a>
                <figcaption><span style="color:rgb(209, 9, 50);">246</span>
                    <br> <br>
                </figcaption>
            </figure>
            <figure>
                <a href="<?php echo $iphone ?>" title="CHÚ BÉ RỒNG ONLINE">
                    <img style="margin-bottom:0px" height="35" src="../Assets/images/ip.png" alt="CHÚ BÉ RỒNG ONLINE">
                </a>
                <figcaption>
                    <a href="<?php echo $iphone ?>">Testflight 1</a> <br> <br>
                </figcaption>
            </figure>
            <figure>
                <a href="https://pay.teamobi.com/?game=nr&name=" title="CHÚ BÉ RỒNG ONLINE"><img
                        src="../Assets/images/napngoc.png" height="35">
                </a>
                <figcaption><span style="color:rgb(209, 9, 50);"><a
                            href="../forum.ngocrongonline.com/app/index.php@for=event&amp;do=sms&amp;p=0&amp;sz=15.html">Báo
                            Lỗi SMS</a></span><br>
                    <span style="color:rgb(209, 9, 50);"><a
                            href="../forum.ngocrongonline.com/app/index.php@for=event&amp;do=report&amp;p=0&amp;sz=15.html">Báo
                            Lỗi thẻ</a></span>
                </figcaption>
            </figure>

        </div>
        <div id="columns" class="text-center"> </div>
    </div>
</div>
<div class="bg-content">
    <div>
        <div class="title">
            <h4>Giới Thiệu</h4>
        </div>
        <div class="content">
            <p> <?php echo $Name_Server ?> là Trò Chơi Trực Tuyến với cốt truyện xoay quanh bộ truyện tranh 7 viên
                Ngọc Rồng. Người chơi sẽ hóa thân thành một trong những anh hùng của 3 hành tinh: Trái
                Đất, Xayda, Namếc. Cùng luyện tập, tăng cường sức mạnh và kỹ năng. Đoàn kết cùng chiến
                đấu chống lại các thế lực hung ác. Cùng nhau tranh tài.<br>
                Đặc điểm nổi bật:<br>
                - Thể loại hành động, nhập vai. Trực tiếp điều khiển nhân vật hành động. Dễ chơi, dễ
                điều khiển nhân vật. Đồ họa sắc nét. Có phiên bản đồ họa cao cho điện thoại mạnh và
                phiên bản pixel cho máy cấu hình thấp.<br>
                - Cốt truyện bám sát nguyên tác. Người chơi sẽ gặp tất cả nhân vật từ Bunma, Quy lão
                kame, Jacky-chun, Tàu Pảy Pảy... cho đến Fide, Pic, Poc, Xên, Broly, đội Bojack.<br>
                - Đặc điểm nổi bật nhất: Tham gia đánh doanh trại độc nhãn. Tham gia đại hội võ thuật.
                Tham gia săn lùng ngọc rồng để mang lại điều ước cho bản thân.<br>
                - Tương thích tất cả các dòng máy trên thị trường hiện nay: Máy tính PC, Điện thoại di
                động Nokia Java, Android, iPhone, Windows Phone, và máy tính bảng Android, iPad.</p>
            <p class="content-p">Cơ Bản</p>
            <p class="text-center">
                <img alt="" src="../Assets/images/gif/gif_maphongba.gif">&nbsp;
                <img alt="" src="../Assets/images/gif/gif_gif_Saiyain.gif">&nbsp;
                <img alt="" src="../Assets/images/gif/gif_supber_kame.gif">&nbsp;
            </p>

            <p class="content-p">VIP</p>
            <p class="text-center">
                <img alt="" src="images/gif/gif_maphongba_VIP.gif">&nbsp;
                <img alt="" src="images/gif/gif_gif_Saiyain_VIP.gif">&nbsp;
                <img alt="" src="images/gif/gif_supber_kame_VIP.gif">&nbsp;
            </p>
        </div>
    </div>
</div>
<div class="bg-content">
    <div>
        <div class="title">
            <h4>Hướng Dẫn Tân Thủ</h4>
        </div>
        <div class="content">
            <p><strong>1. Đăng ký tài khoản</strong></p>

            <p><?php echo $Name_Server ?> sử dụng Tài Khoản riêng, không chung với bất kỳ Trò Chơi nào khác.<br>
                Bạn có thể đăng ký tài khoản miễn phí ngay trong game, hoặc trên trang Diễn Đàn.<br>
                Khi đăng ký, bạn nên sử dụng đúng số điện thoại hoặc email thật của mình. Nếu sử dụng
                thông tin sai, người có số điện thoại hoặc email thật sẽ có thể lấy mật khẩu của
                bạn.<br>
                Số điện thoại và email của bạn sẽ không hiện ra cho người khác thấy. Admin không bao giờ
                hỏi mật khẩu của bạn.</p>

            <p><strong>2. Hướng dẫn điều khiển</strong></p>

            <p>Đối với máy bàn phím: Dùng phím mũi tên, phím số, để điều khiển nhân vật. Phím chọn giữa
                để tương tác.<br>
                Đối với máy cảm ứng: Dùng tay chạm vào màn hình cảm ứng để di chuyển. Chạm nhanh 2 lần
                vào 1 đối tượng để tương tác.<br>
                Đối với PC: Dùng chuột, click chuột phải để di chuyển, click chuột trái để chọn, click
                đôi vào đối tượng để tương tác</p>

            <p><strong>3. Một số thông tin căn bản</strong></p>

            <p>- Đậu thần dùng để tăng KI và HP ngay lập tức.<br>
                - Bạn chỉ mang theo người được 10 hạt đậu. Nếu muốn mang nhiều hơn, hãy xin từ bạn bè
                trong Bang.<br>
                - Tất cả các sách kỹ năng đều có thể học miễn phí tại Quy Lão Kame, khi bạn có đủ điểm
                tiềm năng.<br>
                - Bạn không thể bay, dùng kỹ năng, nếu hết KI.<br>
                - Tấn công quái vật cùng bạn bè trong Bang sẽ mang lại nhiều điểm tiềm năng hơn đánh một
                mình.<br>
                - Tập luyện với bạn bè tại khu vực thích hợp sẽ mang lại nhiều điểm tiềm năng hơn đánh
                quái vật.<br>
                - Khi được nâng cấp, đậu thần sẽ phục hồi nhiều HP và KI hơn.<br>
                - Vào trò chơi đều đặn mỗi ngày để nhận được Ngọc miễn phí.<br>
                - Đùi gà sẽ phục hồi 100% HP, KI. Cà chua phục hồi 100% KI. Cà rốt phục hồi 100% HP.<br>
                - Cây đậu thần kết một hạt sau một thời gian, cho dù bạn đang offline.<br>
                - Sau 3 ngày không tham gia trò chơi, bạn sẽ bị giảm sức mạnh do lười luyện tập.<br>
                - Bạn sẽ giảm thể lực khi đánh quái, nhưng sẽ tăng lại thể lực khi không đánh nữa.</p>
        </div>
    </div>
</div>
<div class="bg-content">
    <div>
        <div class="title">
            <h4>Bạn nên tải phiên bản nào?</h4>
        </div>
        <div class="content">
            <p>Nếu bạn dùng điện thoại Nokia cũ, có bàn phím như Nokia 6300, Nokia E72, Nokia X2, Nokia
                C2, Hãy tải bản JAVA</p>

            <p>Nếu bạn dùng máy cảm ứng sử dụng Android như: Samsung Galaxy Y, HTC, LG, Sky, HKPhone.
                Hãy tải bản Android APK hoặc Android Playstore đều được.</p>

            <p>Nếu bạn dùng điện thoại cảm ứng của NOKIA Lumia, hoặc các máy HTC chạy Windows Phone, hãy
                tải bản cho Windows Phone.</p>

            <p>Nếu bạn dùng máy vi tính cá nhân, laptop chạy Windows XP - Windows 7, hãy tải bản PC.</p>

            <p>Nếu bạn dùng iPhone, iPod, iPad, hãy tải bản iPhone Appstore. Nếu bạn biết chắc rằng máy
                mình đã jailbreak, có cài AppSync hoặc AppstoreVN, hãy cài từ bản iPhone jailbreak để
                tốc độ nhanh hơn.</p>
        </div>
    </div>
</div>
</div>

<?php
include __DIR__ . "/../Controller/footer.php";
?>