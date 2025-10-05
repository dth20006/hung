<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/head.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/nav.php');
$result = $conn->query("SELECT * FROM infoadmin");
$row = $result->fetch(PDO::FETCH_ASSOC);
?>
<main class="content">

   

    <!-- section about -->
    <section id="blog">

        <div class="container">

            <!-- section title -->
            <!-- <h2 class="section-title wow fadeInUp">GIỎ HÀNG VÀ THANH TOÁN</h2> -->

            <div class="spacer" data-height="30"></div>

            <div class="row blog-wrapper">

                
                <div class="col-md-6">
                    

                    
                    <div class="spacer" data-height="20"></div>
                    <h2 class="section-title wow fadeInUp mb-3">THÔNG TIN LIÊN HỆ</h2>
                    <div class="bank-note">
                        <span>VUI LÒNG GỬI BILL THANH TOÁN QUA INSTAGRAM : @_dth206 ĐỂ ĐƯỢC HỖ TRỢ NHANH NHẤT</span>
                    </div>
                    <div class="spacer" data-height="20"></div>
                    <div id="contact" class="wow fadeInUp ">
                        <div class="contact-item btn btn-outline-primary">
                            <div class="contact-img shadow" style="background-image: url('./images/contact/facebook.png');"></div>
                             <a href="https://www.facebook.com/<?=$row['linkfb'];?>" class="contact-link"><?=$row['linkfb'];?></a>
                        </div>

                        <div class="contact-item btn btn-outline-primary">
                            <div class="contact-img shadow" style="background-image: url('./images/contact/zalo.png');"></div>

                            <a href="https://zalo.me/<?=$row['sdt'];?>" class="contact-link"><?=$row['sdt'];?></a>
                        </div>

                        <div class="contact-item btn btn-outline-primary">
                            <div class="contact-img shadow" style="background-image: url('./images/contact/tele.png');"></div>
                            
                            <a href="https://t.me/<?=$row['linktelegram'];?>"  class="contact-link">@<?=$row['linktelegram'];?></a>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </section>




    <!-- section contact -->
    <div class="spacer" data-height="96"></div>
</main>
<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/foot.php');
?>