<?php //include '../coon/config.php' 
session_start();
// echo "session : " . session_id();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">

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
    <title><?php include '../title-footer/title.php' ?></title>
</head>

<body>
    <?php include  '../bannner/banner.php' ?>



    <div class="container-fluid" style="padding-left: 0px;">
        <div class="row">
            <div class="col-md-2 col-lg-3 col-xl-2" id="topofmenu">
                <?php include '../menu/menu.php'; ?>
            </div>
            <div class="col-md-10 col-lg-9 col-xl-10" id="topofmenuPd">


                <div class="h3">ติดต่อเรา</div>
                <hr>


                <div class="col-md-6">
                    <div class="mainContact">
                        <div class="icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <div class="mainText">
                            <h3>เบอร์โทรศัพท์</h3>
                            <p>02-404-0650</p>
                        </div>
                    </div>
                    <div class="mainContact">
                        <div class="icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <div class="mainText">
                            <h3>HOTLINE</h3>
                            <p>083-651-9291 083-651-5197</p>
                        </div>
                    </div>
                    <div class="mainContact">
                        <div class="icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="mainText">
                            <h3>e-mail</h3>
                            <p>wanwalee@eastern-venice.com <br>
                                theerathon@eastern-venice.com</p>
                        </div>
                    </div>


                    <div class="mainContact">
                        <div class="icon">
                            <i class="fa-brands fa-line"></i>
                        </div>
                        <div class="mainText">
                            <h3>Line</h3>
                            <p>
                                <a href="https://line.me/ti/p/~tipwanwalee" target="_blank" class="tagA">Line ID : tipwanwalee</a>
                                <br> <a href="https://line.me/ti/p/~theerathonma" target="_blank" class="tagA">Line ID : theerathonma</a>
                            </p>
                        </div>
                    </div>

                    <div class="mainContact">
                        <div class="icon">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div class="mainText">
                            <h3>Facebook</h3>
                            <p><a href="https://www.facebook.com/Premiumm" target="_blank" class="tagA">Facebook : https://www.facebook.com/Premiumm</a></p>
                        </div>
                    </div>

                    <div class="mainContact">
                        <div class="icon">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div class="mainText">
                            <h3>ที่อยู่</h3>
                            <p>
                            <div class="col-6 map text-center pe-2"> <img src="../images/Map Office.jpg" alt="" srcset=""> <br><br> 59/97 หมู่บ้านเดอะวอเตอร์เฮาส์ หลักสอง บางแค กรุงเทพฯ 10160</div>
                            </p>
                        </div>
                    </div>
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
    </script>
</body>

</html>