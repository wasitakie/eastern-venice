<?php //include '../coon/config.php' 
session_start();
//echo "session : " . $_SESSION["idOrder"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
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
    <div class="container-fluid " style="padding-left: 0px;">
        <div class="row">
            <div class="col-md-2 col-lg-3 col-xl-2" id="topofmenu" data-aos="fade-right" data-aos-delay="800">
                <?php include '../menu/menu.php'; ?>
            </div>
            <div class="col-md-10 col-lg-9 col-xl-10 " id="topofmenuPd">
                <div class="col-md-12 ">
                    <?php include 'slide.php'; ?>
                    <?php
                    include '../coon/config.php';
                    $dataTool1 = $_POST["dataTool1"];
                    $editTool1 = $coon->prepare(" SELECT* FROM group_product WHERE group_type_id = ? ");
                    $editTool1->execute([1]);
                    $rowEditTool1 = $editTool1->fetch(PDO::FETCH_ASSOC)
                    ?>

                    <div class="textTitle" data-aos="flip-up" data-aos-delay="800">
                        <?= $rowEditTool1["group_text"] ?>
                    </div>
                    <div class="searchMo">
                        <form action="search.php" method="get" class="formSearch">
                            <input type="text" name="q" class="searchBer1" placeholder="ค้นหาสินค้า" value="<?= $_GET["q"] ?>">
                            <input type="image" class="iconSearch1" src="../images/banner/icons8-search-50.png" alt="Submit" width="25" height="25" id="searchIcon">
                        </form>
                    </div>

                    <div class="h3" id="topofpage" data-aos="fade-up" data-aos-delay="800">Hot item
                        <hr>
                    </div>

                    <?php include 'productList.php'; ?>
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