<?php
session_start();
include '../coon/config.php';
$key = $coon->prepare("SELECT * FROM home ");
$key->execute();
$row = $key->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?= $row["home_keyword"] ?>">
    <meta name="description" content="<?= $row["home_description"] ?>">
    <link rel="icon" type="image/x-icon" href="../images/bkImg1.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../slick/slick/slick.css">
    <link rel="stylesheet" href="../slick/slick/slick-theme.css">
    <link rel="stylesheet" href="../css/menuTop.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/slide.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title><?php include '../title-footer/title.php' ?></title>
</head>

<body>
    <?php include  '../bannner/banner.php' ?>

    <div class="spaeTop"></div>

    <div class="container-fluid" style="padding-left: 0px;">
        <div class="row">
            <div class="col-md-2 col-lg-3 col-xl-2" id="topofmenu" data-aos="fade-right" data-aos-delay="800">
                <?php include '../menu/menu.php'; ?>
            </div>
            <div class="col-md-10 col-lg-9 col-xl-10" id="topofmenuPd" data-aos="fade-up" data-aos-delay="800">

                <div class="h3">ติดต่อเรา</div>
                <hr>

                <div>
                    <h3> <b>ห้างหุ่นส่วนจำกัด อิสเทิน เวนิส (Eastern Venice Ltd., Part.)</b> </h3>
                    ที่อยู่ 59/97 หมู่บ้านเดอะวอเตอร์เฮาส์ หลักสอง บางแค กรุงเทพฯ 10160<br>
                    หมายเลขผู้จดทะเบียน 0103550012933<br>
                    หมายเลขผู้เสียภาษี 3 0326 0921 0<br>

                </div>

                <div class="boxContact">
                    <div class="imgContact"><img src="../images/contact/phone-call_4213179.png" alt="" srcset=""></div>
                    <div class="detailContact">
                        <h6><b>เบอร์โทรศัพท์</b> </h6>
                        <p>02-404-0650</p>
                    </div>
                </div>
                <div class="boxContact">
                    <div class="imgContact"><img src="../images/contact/smartphone_488.png" alt="" srcset=""></div>
                    <div class="detailContact">
                        <h6><b>HOTLINE</b></h6>
                        <p>083-651-9291 083-651-5197</p>
                    </div>
                </div>

                <div class="boxContact">
                    <div class="imgContact"><img src="../images/contact/email_5291718.png" alt="" srcset=""></div>
                    <div class="detailContact">
                        <h6><b>e-mail</b></h6>
                        <p>wanwalee@eastern-venice.com <br>
                            theerathon@eastern-venice.com</p>
                    </div>
                </div>

                <div class="boxContact">
                    <div class="imgContact"><img src="../images/contact/line_3536785.png" alt="" srcset=""></div>
                    <div class="detailContact">
                        <h6><b>Line</b></h6>
                        <p><a href="https://line.me/ti/p/~tipwanwalee" target="_blank" class="tagA">Line ID : tipwanwalee</a> <a href="https://line.me/ti/p/~tipwanwalee" target="_blank" class="tagA"> Click Me <img src="../images/contact/icons8-click-30.png" alt="" srcset=""></a>
                            <br> <a href="https://line.me/ti/p/~theerathonma" target="_blank" class="tagA">Line ID : theerathonma</a> <a href="https://line.me/ti/p/~theerathonma" target="_blank" class="tagA"> Click Me <img src="../images/contact/icons8-click-30.png" alt="" srcset=""></i></a>
                        </p>
                    </div>
                </div>
                <div class="boxContact">
                    <div class="imgContact"><img src="../images/contact/communication_15047435.png" alt="" srcset=""></div>
                    <div class="detailContact">
                        <h6><b>Facebook</b></h6>
                        <p><a href="https://www.facebook.com/Premiumm" target="_blank" class="tagA">Facebook : https://www.facebook.com/Premiumm</a></p>
                    </div>
                </div>
                <div class="boxContact">
                    <div class="imgContact"><img src="../images/contact/google-maps_888856.png" alt="" srcset=""></div>
                    <div class="detailContact">
                        <h6><b>แผนที่</b></h6>

                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1265.6457646717888!2d100.39030748580824!3d13.668708458419587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bda18e29b775%3A0x2cf068d6f39adee7!2z4Lir4LiI4LiBLiDguK3guLTguKrguYDguJfguLTguJkg4LmA4Lin4LiZ4Li04Liq!5e0!3m2!1sth!2sth!4v1711013944618!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

                        <p><img src="../images/Map Office.jpg" alt="" srcset="" style="width: 100%;"></p>

                    </div>
                </div>

            </div>
        </div>
    </div>







    <?php include '../title-footer/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../slick/slick/slick.min.js"></script>
    <script>
        $('.single-item').slick({
            arrows: true,
            autoplay: true,
            dots: true
        });

        AOS.init();


        $(document).ready(function() {
            $('.bannerFluid .logo').css('width', 500);

            $(window).bind('scroll', function() {
                if ($(window).scrollTop() > 10) {
                    $('.bannerFluid .logo').css('width', 400);
                } else {
                    $('.bannerFluid .logo').css('width', 500);
                }
            });
        });
    </script>
</body>

</html>