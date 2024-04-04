<?php
include '../coon/config.php';
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
                <div class="col-8 bigBox">

                    <?php
                    $se = $coon->prepare("SELECT * FROM aboutus ");
                    $se->execute();
                    $row  = $se->fetch(PDO::FETCH_ASSOC)
                    ?>

                    <div class="h3">เกี่ยวกับ ห้างหุ่นส่วนจำกัด อิสเทิน เวนิส (Eastern Venice Ltd., Part.)</div>
                    <hr>
                    <div class="mainAboutUs">
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
    </script>
</body>

</html>