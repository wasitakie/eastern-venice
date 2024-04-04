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
            <div class="col-md-10 col-lg-9 col-xl-10" id="topofmenuPd">
                <div class="col-8 bigBox">

                    <?php
                    $se = $coon->prepare("SELECT * FROM aboutus ");
                    $se->execute();
                    $row  = $se->fetch(PDO::FETCH_ASSOC)
                    ?>

                    <div class="h3" data-aos="fade-up" data-aos-delay="800">เกี่ยวกับ ห้างหุ่นส่วนจำกัด อิสเทิน เวนิส (Eastern Venice Ltd., Part.)
                        <hr>
                    </div>

                    <div class="mainAboutUs" data-aos="flip-up" data-aos-delay="800">
                        <?= $row["aboutus_detail"] ?>
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