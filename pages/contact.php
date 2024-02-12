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

                    <div class="h3">ติดต่อเรา</div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>แบบฟอร์มติดต่อเรา</h3>
                            <form class="row g-3">
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">ชื่อผู้ติดต่อ</label>
                                    <input type="text" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword4" class="form-label">ชื่อบริษัท</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">ที่อยู่</label>
                                    <input type="text" class="form-control" id="inputAddress">
                                </div>

                                <div class="col-4">
                                    <label for="inputCity" class="form-label">เบอร์มือถือ</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-4">
                                    <label for="inputCity" class="form-label">เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-4">
                                    <label for="inputCity" class="form-label">เบอร์โทรสาร</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">รายละเอียดสินค้าที่ท่านน่าสนใจ</label>

                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">ส่งข้อมูล</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h3>ติดต่อเรา</h3>
                            <div class="mainContact">
                                <div class="icon">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </div>
                                <div class="mainText">
                                    <h3>เบอร์โทรศัพท์</h3>
                                    <p>02-404-0650</p>
                                </div>
                            </div>
                            <div class="mainContact">
                                <div class="icon">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </div>
                                <div class="mainText">
                                    <h3>e-mail</h3>
                                    <p>wanwalee@eastern-venice.com</p>
                                    <p>theerathon@eastern-venice.com</p>
                                </div>
                            </div>
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