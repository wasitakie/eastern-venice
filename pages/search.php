<?php
include '../coon/config.php';
session_start();
//echo "session : " . $_SESSION["idOrder"];
$search = "%{$_GET["q"]}%";
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
            <div class="col-md-10 col-lg-9 col-xl-10 " id="topofmenuPd">
                <div class="col-md-12 ">
                    <?php include 'slide.php'; ?>
                    <div class="productList">
                        <div class="row">
                            <?php


                            $seSearch = $coon->prepare(" SELECT* FROM group_product_sub WHERE sub_type_product LIKE ? ");
                            $seSearch->execute([$search]);

                            echo $seSearch->rowCount();
                            while ($rowSearch = $seSearch->fetch(PDO::FETCH_ASSOC)) {
                            ?>



                                <div class="col-md-3 col-lg-6 col-xl-3  my-3 ">
                                    <div class="card borderColor">
                                        <a href="productSub.php?id=<?= $rowSearch["sub_type_id"] ?>&name=<?= $rowSearch["sub_type_product"] ?>&group=<?= $rowSearch["sub_group_id"] ?>" class="tagA">
                                            <div class="cardImg">
                                                <img class="card-img-top" src="../images/product/<?= $rowSearch["sub_file"] ?>" alt="<?= $rowSearch["sub_type_product"] ?>" />
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $rowSearch["sub_type_product"] ?></h5>
                                                <p class="card-text" style="font-size: 15px;"><b>รายละเอียดสินค้า :</b><?= strip_tags($rowSearch["sub_text"]); ?><br>
                                            </div>
                                        </a>
                                    </div>
                                </div>





                            <?php
                            }
                            ?>
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