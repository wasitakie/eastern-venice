<?php //include '../coon/config.php' 
session_start();
include '../coon/config.php';
$dk = $coon->prepare(" SELECT * FROM product_images WHERE product_images_id = ?");
$dk->execute([$_GET["id"]]);
$row = $dk->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?= $row["product_images_keyword"] ?>">
    <meta name="description" content="<?= $row["product_images_description"] ?>">

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
    <style>

    </style>
</head>

<body>
    <?php include  '../bannner/banner.php' ?>
    <?php

    $slide = $coon->prepare(" SELECT* FROM product_images WHERE product_images_id =? ");
    $slide->execute([$_GET["id"]]);
    while ($rowSlide = $slide->fetch(PDO::FETCH_ASSOC)) {


    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="container">
                        <div class="col-md-12 slideProductMain">
                            <div class="slider-for">
                                <?php
                                $imagesCount = count(explode("/", $rowSlide["product_images_file"]));
                                $imagesList = explode("/", $rowSlide["product_images_file"]);
                                for ($i = 0; $i <= $imagesCount - 1; $i++) {
                                    list($width, $height) = getimagesize("../images/product/" . $imagesList[$i]);
                                    $v = array('h' => $height, 'w' => $width);
                                    if ($v['w'] > $v['h']) {
                                        $sizeWh = 'width="100%"';
                                    } else {
                                        $sizeWh = 'height="100%"';
                                    }
                                ?>
                                    <div class="slideProduct1"><img src="../images/product/<?= $imagesList[$i] ?>" alt="" srcset="" <?= $sizeWh ?>></div>
                                <?php
                                }
                                ?>
                            </div>

                        </div>
                        <div class="col-md-12 slideProductSub">
                            <div class="slider-nav">
                                <?php
                                include '../menu/myClassMenu.php';
                                $objName = new MyClassMenu;
                                $imagesCount = count(explode("/", $rowSlide["product_images_file"]));
                                $imagesList = explode("/", $rowSlide["product_images_file"]);
                                for ($i = 0; $i <= $imagesCount - 1; $i++) {
                                ?>
                                    <div class="slideProduct2"><img src="../images/product/<?= $imagesList[$i] ?>" alt="" srcset="" width="20%"></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="subLink">
                        <a href="../pages/index.php">หน้าหลัก/</a>
                        <a href="../pages/productGroup.php?id=<?= $_GET["main"] ?>&name= <?= $objName->groupName($_GET["main"]) ?>"><?= $objName->groupName($_GET["main"]) ?>/</a>
                        <a href="../pages/productSub.php?id=<?= $objName->backGroup($rowSlide["product_sub_id"]) ?>&name=<?= $_GET["name"] ?>&group=<?= $_GET["main"] ?>"><?= $_GET["name"] ?>/</a>
                        <a href="#"><?= $rowSlide["product_images_name"] ?></a>
                    </div>
                    <h1><?= $rowSlide["product_images_name"] ?></h1>
                    <hr>
                    <p class="card-text"><b>รหัสสินค้า :</b> <?= $rowSlide["product_images_num"] ?> <br> <b>รายละเอียด : </b>
                        <?= strip_tags($rowSlide["product_images_detail"]) ?><br> </p>
                    <p>
                    <div class="">
                        <!-- <form class="d-flex">
                            <div class="col">
                                <div class="mb-3 d-flex align-items-md-center  ">
                                    <i class="fa-solid fa-circle-minus" onclick="incrementValueD()"></i> &nbsp; <input type="text" name="numProduct" id="total-count" class="form-control w-25 number_only text-center " value="1"> &nbsp; <i class="fa-solid fa-circle-plus" onclick="incrementValue()"></i>

                                </div>
                                <hr> <button type="button" class="btnCard"><i class="fa-solid fa-cart-plus"></i>
                                    หยิบสินค้าใส่ตะกร้า</button>
                        </form> -->

                    </div>

                    </p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../slick/slick/slick.min.js"></script>
    <script>
        function incrementValue() {
            var value = parseInt(document.getElementById('total-count').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('total-count').value = value;
        }

        function incrementValueD() {
            var value = parseInt(document.getElementById('total-count').value, 10);
            value = isNaN(value) ? 0 : value;
            value--;
            if (value <= 1) {
                document.getElementById('total-count').value = 1;
            } else {
                document.getElementById('total-count').value = value;
            }

        }





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
            arrows: true

        });

        $('.number_only').bind('keyup paste', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
</body>

</html>