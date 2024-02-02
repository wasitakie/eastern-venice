<?php //include '../coon/config.php' 
session_start();
echo "session : " . session_id();
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
    <title>easten</title>
</head>

<body>
    <?php include  '../bannner/banner.php' ?>

    <div class="container-fluid" style="padding-left: 0px;">
        <div class="row">
            <div class="col-md-6">
                <div class="slider-for">
                    <div class=""><img
                            src="https://www.abcthebaby.com/wp-content/uploads/2023/05/Air-Purifier-Portable-01.webp"
                            alt="" srcset="">
                    </div>
                    <div class=""><img src="https://down-th.img.susercontent.com/file/th-11134207-7r98o-lnwiqgkh1euf76"
                            alt="" srcset="">
                    </div>
                    <div class=""><img src="https://down-th.img.susercontent.com/file/th-11134207-7r990-lqtyrh909144af"
                            alt="" srcset="">
                    </div>
                    <div class=""><img src="https://down-th.img.susercontent.com/file/th-11134207-7r98p-lqtyrh8zcqai17"
                            alt="" srcset="">
                    </div>
                </div>
                <div class="slider-nav">
                    <div class=""><img
                            src="https://www.abcthebaby.com/wp-content/uploads/2023/05/Air-Purifier-Portable-01.webp"
                            alt="" srcset="" width="20%">
                    </div>
                    <div class=""><img src="https://down-th.img.susercontent.com/file/th-11134207-7r98o-lnwiqgkh1euf76"
                            alt="" srcset="" width="20%">
                    </div>
                    <div class=""><img src="https://down-th.img.susercontent.com/file/th-11134207-7r990-lqtyrh909144af"
                            alt="" srcset="" width="20%">
                    </div>
                    <div class=""><img src="https://down-th.img.susercontent.com/file/th-11134207-7r98p-lqtyrh8zcqai17"
                            alt="" srcset="" width="20%">
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../slick/slick/slick.min.js"></script>
    <script>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        arrows: true,
    });
    </script>
</body>

</html>