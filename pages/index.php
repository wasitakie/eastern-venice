<?php //include '../coon/config.php' 
session_start();
echo "session : " . $_SESSION["idOrder"];
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

    <?php include 'slide.php'; ?>

    <div class="container-fluid" style="padding-left: 0px;">
        <div class="row">
            <div class="col-md-2 col-lg-3 col-xl-2">
                <?php include '../menu/menu.php'; ?>
            </div>
            <div class="col-md-10 col-lg-9 col-xl-10">
                <div class="col-md-12">
                    <div class="textTitle">
                        เราเป็นผู้นำเข้าของ Premium จัดทำ จัดหา และออกแบบ สินค้าพรีเมี่ยม และ Premium gift ทุกชนิดตาม
                        ที่ท่านต้องการ ของพรีเมี่ยมของเรามีให้ท่านเลือกหลากหลายตามเทศกาลและความต้องการ เช่น เสื้อยืด
                        เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า,
                        กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า
                        PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ
                        จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง,
                        พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม และสินค้าอื่นๆ
                        อีกมากมาย
                    </div>

                    <div class="h3">สินค้าขายดี</div>
                    <hr>
                    <?php include 'productList.php'; ?>
                </div>
            </div>
        </div>
    </div>

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