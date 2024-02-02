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
    <style>

    </style>
</head>

<body>
    <?php include  '../bannner/banner.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="container">
                    <div class="col-md-12 slideProductMain">
                        <div class="slider-for">
                            <div class="slideProduct1"><img
                                    src="https://www.abcthebaby.com/wp-content/uploads/2023/05/Air-Purifier-Portable-01.webp"
                                    alt="" srcset="">
                            </div>
                            <div class="slideProduct1"><img
                                    src="https://down-th.img.susercontent.com/file/th-11134207-7r98o-lnwiqgkh1euf76"
                                    alt="" srcset="">
                            </div>
                            <div class="slideProduct1"><img
                                    src="https://down-th.img.susercontent.com/file/th-11134207-7r990-lqtyrh909144af"
                                    alt="" srcset="">
                            </div>
                            <div class="slideProduct1"><img
                                    src="https://down-th.img.susercontent.com/file/th-11134207-7r98p-lqtyrh8zcqai17"
                                    alt="" srcset="">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 slideProductSub">
                        <div class="slider-nav">
                            <div class="slideProduct2"><img
                                    src="https://www.abcthebaby.com/wp-content/uploads/2023/05/Air-Purifier-Portable-01.webp"
                                    alt="" srcset="" width="20%">
                            </div>
                            <div class="slideProduct2"><img
                                    src="https://down-th.img.susercontent.com/file/th-11134207-7r98o-lnwiqgkh1euf76"
                                    alt="" srcset="" width="20%">
                            </div>
                            <div class="slideProduct2"><img
                                    src="https://down-th.img.susercontent.com/file/th-11134207-7r990-lqtyrh909144af"
                                    alt="" srcset="" width="20%">
                            </div>
                            <div class="slideProduct2"><img
                                    src="https://down-th.img.susercontent.com/file/th-11134207-7r98p-lqtyrh8zcqai17"
                                    alt="" srcset="" width="20%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Mini Air Purifier</h1>
                <hr>
                <p class="card-text"><b>รหัสสินค้า :</b> IT097 <br> <b>รายละเอียด : </b>
                    Portable Air
                    Purifier
                    เครื่องฟอกอากาศสำหรัยรถยนต์ กรองฝุ่น PM 2.5 ดับกลิ่นอับ ควันบุหรี่
                    เสียงเงียบ ใช้ไฟ USB <br> <b>ราคา : </b> <span>1,400</span> บาท</p>
                <p>
                <div class="">
                    <form class="d-flex">
                        <div class="col">
                            <div class="mb-3 d-flex align-items-md-center  ">
                                <i class="fa-solid fa-circle-minus" onclick="incrementValueD()"></i> &nbsp; <input
                                    type="text" name="numProduct" id="total-count"
                                    class="form-control w-25 number_only text-center " value="1"> &nbsp; <i
                                    class="fa-solid fa-circle-plus" onclick="incrementValue()"></i>
                                <button type="button" class="btnCard"><i class="fa-solid fa-cart-plus"></i>
                                    เลือกสินค้า</button>
                            </div>
                    </form>

                </div>

                </p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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