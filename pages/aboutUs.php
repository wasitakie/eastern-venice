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
    <title>easten</title>
</head>

<body>
    <?php include  '../bannner/banner.php' ?>



    <div class="container-fluid" style="padding-left: 0px;">
        <div class="row">
            <div class="col-md-2 col-lg-3 col-xl-2" id="topofmenu">
                <?php include '../menu/menu.php'; ?>
            </div>
            <div class="col-md-10 col-lg-9 col-xl-10" id="topofmenuPd">
                <div class="col-md-12 bigBox">

                    <div class="h3">เกี่ยวกับ ห้างหุ่นส่วนจำกัด อิสเทิน เวนิส (Eastern Venice Ltd., Part.)</div>
                    <hr>
                    <div class="mainAboutUs">
                        <p>เราเป็นผู้นำเข้า จัดทำ จัดหา และออกแบบ สินค้าพรีเมี่ยมและสินค้าโปรโมชั่นทุกชนิดตามที่ท่านต้องการ สำหรับงาน<br>
                            ส่งเสริมการขาย<br>
                            โฆษณา ประชาสัมพันธ์<br>
                            สร้างแบรนด์บริษัทของท่านให้เป็นที่รู้จักอย่างกว้างขวาง<br>
                            โอกาสพิเศษต่างๆ<br>
                            โดยเราเน้นสินค้าที่มีคุณภาพในราคาที่เหมาะสมสำหรับให้ลูกค้าของท่านเนื่องในโอกาสพิเศษต่างๆ พร้อมให้คำแนะนำและบริการจากทีมงานออกแบบและขายที่มีประสบการณ์<br>

                            สินค้าของเรามีให้ท่านเลือกหลากหลายตามเทศกาลและความต้องการ เช่น เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ต ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าลดโลกร้อน, Flash Drive, ปากกาโลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำแบบต่างๆ, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ และสินค้าอื่นๆ อีกมากมาย<br>

                            Eastern Venice หวังเป็นอย่างยิ่งว่า จะได้มีโอกาสรับใช้บริษัท หรือ องค์กรของท่าน และช่วยพัฒนาชื่อเสียงบริษัท หรือ องค์กรของท่านให้มีชื่อเสียงมากยิ่งขึ้น<br>

                            <b>“ We serve you a wonderful gift & premium ”</b><br>

                            หมายเลขผู้จดทะเบียน : 0103550012933<br>
                            หมายเลขผู้เสียภาษี : 3 0326 0921 0
                        </p>
                    </div>

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