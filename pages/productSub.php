<?php //include '../coon/config.php' 
session_start();

//echo "session : " . $_SESSION["idOrder"];
include '../coon/config.php';
$dk = $coon->prepare(" SELECT * FROM group_product WHERE group_type_id = ?");
$dk->execute([$_GET["group"]]);
$row = $dk->fetch(PDO::FETCH_ASSOC);

$groupText = $row["group_text"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?= $row["group_keywords"] ?>">
    <meta name="description" content="<?= $row["group_description"] ?>">

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

                    <?php

                    // include '../menu/myClassMenu.php';
                    $objName = new MyClassMenu;
                    $editTool2 = $coon->prepare(" SELECT* FROM group_product WHERE group_type_id = ? ");
                    $editTool2->execute([$_GET["id"]]);
                    $rowEditTool2 = $editTool2->fetch(PDO::FETCH_ASSOC)
                    ?>

                    <div class="textTitle">
                        <?= $groupText ?>
                    </div>

                    <div class="h3" id="topofpage"><?= $_GET["name"] ?></div>
                    <hr>
                    <div class="subLink">
                        <a href="../pages/index.php">หน้าหลัก/</a>
                        <a href="../pages/productGroup.php?id=<?= $_GET["group"] ?>&name=<?= $objName->groupName($_GET["group"]) ?>"><?= $objName->groupName($_GET["group"]) ?>/</a>
                        <a href="../pages/productSub.php?id=<?= $_GET["id"] ?>&name= <?= $_GET["name"] ?>&group=<?= $_GET["group"] ?>"><?= $_GET["name"] ?>/</a>
                    </div>
                    <?php include 'productGroupListSub.php'; ?>
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