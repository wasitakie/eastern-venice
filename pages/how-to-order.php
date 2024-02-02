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
    <link rel="stylesheet" href="../css/how-to-order.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/slide.css">
    <title>easten</title>
</head>

<body>
    <?php include  '../bannner/banner.php' ?>



    <div class="container-fluid" style="padding-left: 0px;">
        <div class="row">
            <div class="col-md-2">
                <?php include '../menu/menu.php'; ?>
            </div>
            <div class="col-md-10">
                <div class="col-md-12">

                    <div class="h3">วิธีการสั่งซื้อ</div>
                    <hr>
                    <div class="mainToOrder">
                        <div class="iconToOrder">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </div>
                        <div class="textToOrder">
                            <h2> <span class="h2Num">01</span> หยิบสินค้าใส่รถเข็น</h2>
                            <p>เมื่อถูกใจสินค้าชิ้นไหนแล้ว ให้กดปุ่ม <b>“หยิบใส่รถเข็น” </b> เมื่อหยิบสินค้าใส่รถเข็นแล้วเว็บจะพาไปยังหน้ารถเข็น เพื่อแสดงให้เราดูว่ามีสินค้าอะไรบ้างแล้วที่เราหยิบใส่รถเข็นไว้ หากต้องการเลือกซื้อสินค้าต่อ ก็กด <b>“เลือกซื้อสินค้าต่อ”</b> </p>

                        </div>
                    </div>

                    <div class="mainToOrder">
                        <div class="iconToOrder">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <div class="textToOrder">
                            <h2> <span class="h2Num">02</span> Checkout</h2>
                            <p>เมื่อเลือกซื้อสินค้าจนพอใจแล้ว ให้กดปุ่ม <b>“Checkout”</b> หรือ <b>“ชำระเงิน”</b> เพื่อเข้าสู่การขั้นตอนการสั่งซื้อสินค้าต่อไป ยืนยันคำสั่งซื้อ จากนั้นกรอกที่อยู่สำหรับจัดส่งสินค้า หรือสำหรับสมาชิกกรอกที่อยู่สำหรับจัดส่งสินค้า(เฉพาะครั้งแรกเท่านั้น) เมื่อเติมข้อมูลต่างๆ ถูกต้องแล้ว กดปุ่ม ดำเนินการต่อ จนไปถึงปุ่ม <b>“ยืนยันคำสั่งซื้อ”</b></p>

                        </div>
                    </div>

                    <div class="mainToOrder">
                        <div class="iconToOrder">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="textToOrder">
                            <h2> <span class="h2Num">03</span> ตรวจสอบอีเมล์</h2>
                            <p>เมื่อกดปุ่มสั่งซื้อสินค้าแล้ว คุณจะได้รับอีเมล์ 1 ฉบับ ให้ login เข้าสู่ระบบอีเมล์ของคุณเพื่อเช็คเมล์จากเรา ในนั้นจะระบุรายละเอียดการสั่งซื้อทั้งหมด รวมถึงเลขที่บัญชีสำหรับการโอนเงิน</p>

                        </div>
                    </div>

                    <div class="mainToOrder">
                        <div class="iconToOrder">
                            <i class="fa-regular fa-credit-card"></i>
                        </div>
                        <div class="textToOrder">
                            <h2> <span class="h2Num">04</span> โอนเงินค่าสินค้า</h2>
                            <p>เมื่อตรวจสอบข้อมูลถูกต้องแล้ว ให้คุณโอนเงินค่าสินค้า หากไม่มีการโอนเงินภายใน 2 วัน ทางร้านขอสงวนสิทธิ์ ยกเลิกออเดอร์ดังกล่าว เพื่อนำสินค้ากลับสู่การขายให้ลูกค้าท่านอื่นต่อไป</p>

                        </div>
                    </div>
                    <div class="mainToOrder">
                        <div class="iconToOrder">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="textToOrder">
                            <h2> <span class="h2Num">05</span> แจ้งชำระค่าสินค้า</h2>
                            <p>โดยสามารถแจ้งชำระค่าสินค้าได้ที่เมนูแจ้งการโอนเงินในเมนูด้านบน หรือคลิ๊ก <b>“แจ้งการโอนเงิน”</b></p>

                        </div>
                    </div>
                    <div class="mainToOrder">
                        <div class="iconToOrder">
                            <i class="fa-solid fa-box-open"></i>
                        </div>
                        <div class="textToOrder">
                            <h2> <span class="h2Num">06</span> รอรับสินค้า</h2>
                            <p>หลังจากแจ้งการโอนเงินแล้ว คุณก็สามารถรอรับสินค้าได้อย่างสบายใจ โดยสินค้าจะถึงมือภายใน 1-2 วัน และจะมีเลขที่พัสดุแจ้งไปทางอีเมล์เมื่อเราส่งสินค้าแล้ว</p>

                        </div>
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