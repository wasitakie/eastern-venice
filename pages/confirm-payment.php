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
    <link rel="stylesheet" href="../css/confirm-payment.css">
    <link rel="stylesheet" href="../css/how-to-order.css">
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
                    <div class="h3">แจ้งการโอนเงิน</div>
                    <hr>
                    <div class="mainConfirm">
                        <h3>แบบฟอร์มแจ้งโอนเงิน</h3>
                        <div class="boxText">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">ชื่อ</label>
                                    <input type="email" class="form-control" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="tel" class="form-label">เบอร์ติดต่อ</label>
                                    <input type="number" class="form-control" id="tel">
                                </div>
                                <div class="col-md-6">
                                    <label for="namePay" class="form-label">เลขที่บัญชี</label>
                                    <input type="email" class="form-control" id="namePay">
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="form-label">ยอดโอน</label>
                                    <input type="number" class="form-control" id="price">
                                </div>
                                <div class="col-12">
                                    <label for="">ธนาคารการโอน</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            ธนาคาร
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">วันที่โอน</label>
                                    <input type="month" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">หลักฐานการโอน</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="col-12">

                                    <label class="form-check-label" for="gridCheck">
                                        หมายเหตุ
                                    </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">แจ้งชำระเงิน</button>
                                </div>
                            </form>
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