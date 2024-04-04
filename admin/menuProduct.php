<?php
session_start();

include '../coon/config.php';
include 'session/sessionAdmin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Menu Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php include 'menu.php'; ?>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'search.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">เพิ่มเมนูสินค้าหลัก</h1>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        การลบข้อมูลเมนูนี้ จะผลกระทบกับเมนูอื่นๆ วิธีการลบที่ถูกต้องลบจาก สินค้าย่อย > ชื่อสินค้าหลัก > ชื่อเมนูสินค้าหลัก ตามลำดับ!
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <form action="insertData.php?g=inMainMenu" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">เมนูหลัก</label>
                                    <input type="text" class="form-control" name="mainName" id="" aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">คำอธิบายส่วนบน</label>
                                    <textarea class="form-control" name="detail" id="summernote" rows="3"><?= $row["home_description"] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="" rows="3"><?= $row["home_description"] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" id="" value="<?= $row["home_keyword"] ?>" />
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        บันทึก
                                    </button>
                                </div>
                            </form>


                            <hr>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">No.</th>
                                            <th scope="col">ชื่อเมนู</th>
                                            <th scope="col">แก้ไข / ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../coon/config.php';
                                        $tool1 = $coon->prepare("SELECT* FROM group_product ");
                                        $tool1->execute();
                                        $n = 1;
                                        while ($rowTool1 = $tool1->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <tr class="">
                                                <td><?= $n ?></td>
                                                <td><?= $rowTool1["group_type"] ?></td>
                                                <td><button type="button" class="btn btn-primary btn-sm editTool1" data-bs-toggle="button" aria-pressed="false" autocomplete="off" data-id="<?= $rowTool1["group_type_id"] ?>" data-toggle="modal" data-target="#editTool1">
                                                        แก้ไข
                                                    </button>
                                                    <button id="" type="button" class="btn btn-danger btn-sm deleteMainMenu" data-id="<?= $rowTool1["group_type_id"] ?>">
                                                        ลบ
                                                    </button>

                                                </td>
                                            </tr>
                                        <?php
                                            $n++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <form action="insertData.php?g=inSubMenu" method="post" enctype="multipart/form-data">
                                <div class="mb-3 form-group">
                                    <label for="" class="form-label">ชื่อสินค้าหลัก</label>
                                    <select class="form-control" name="mainMenu" id="">

                                        <option value="0">-- ชื่อสินค้าหลัก --</option>
                                        <?php
                                        $listName = $coon->prepare(" SELECT* FROM group_product ");
                                        $listName->execute();
                                        while ($rowListName = $listName->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <option value="<?= $rowListName["group_type_id"] ?>"><?= $rowListName["group_type"]  ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">เมนูรอง</label>
                                    <input type="text" class="form-control" name="subMenu" id="" aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">คำอธิบายส่วนบน</label>
                                    <textarea class="form-control" name="detail" id="summernote1" rows="3"><?= $row["home_description"] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">ใส่รูป</label>
                                    <input type="file" class="form-control" name="fileImg" id="imgSub" aria-describedby="helpId" placeholder="" accept="image/png, image/gif, image/jpeg" />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="" rows="3"><?= $row["home_description"] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keyword" id="" value="<?= $row["home_keyword"] ?>" />
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        บันทึก
                                    </button>
                                </div>
                            </form>

                            <hr>
                            <div class="table-responsive">
                                <?php
                                include '../menu/myClassMenu.php';
                                $obj2 = new MyClassMenu;
                                include '../coon/config.php';
                                $tool2 = $coon->prepare(" SELECT* FROM group_product ");
                                $tool2->execute();
                                $n = 1;
                                while ($rowTool2 = $tool2->fetch(PDO::FETCH_ASSOC)) {

                                ?>
                                    <table class="table table-bordered">

                                        <thead>
                                            <tr>
                                                <p><?= $rowTool2["group_type"] ?></p>
                                                <hr>
                                                <th scope="col">no.</th>
                                                <th scope="col" style="width: 50%;">ชื่อเมนู</th>
                                                <th scope="col">แก้ไข / ลบ</th>
                                            </tr>

                                        </thead>

                                        <tbody>
                                            <?php $obj2->subMenu2($rowTool2["group_type_id"]) ?>

                                        </tbody>
                                    </table>
                                <?php
                                    $n++;
                                }

                                ?>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <form action="insertData.php?g=insertProduct3" method="post" enctype="multipart/form-data">



                                <div class="mb-3 form-group">
                                    <label for="" class="form-label">สินค้าย่อย</label>
                                    <select class="form-control" name="mainMenuSub" id="mainMenuSub">

                                        <option value="0">-- สินค้าย่อย --</option>
                                        <?php
                                        $listName = $coon->prepare(" SELECT* FROM group_product_sub ");
                                        $listName->execute();
                                        while ($rowListName = $listName->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <option value="<?= $rowListName["sub_type_id"] ?>"><?= $rowListName["sub_type_product"]  ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">ชื่อสินค้า</label>
                                    <input type="text" class="form-control" name="nameProduct" id="nameProduct" aria-describedby="helpId" placeholder="" />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">รหัสสินค้า</label>
                                    <input type="text" class="form-control" name="numProduct" id="numProduct" aria-describedby="helpId" placeholder="" />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">รายละเอียดสินค้า</label>
                                    <textarea class="form-control detailProduct" name="detailProduct" id="summernote3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">ใส่รูป</label>
                                    <input type="file" class="form-control" name="fileImgProduct[]" accept="image/png, image/gif, image/jpeg" id="fileImgProduct" multiple />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <textarea class="form-control" name="descriptionProduct" id="descriptionProduct" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keywordProduct" id="keywordProduct" value="" />
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-block btn3">
                                        บันทึก
                                    </button>
                                </div>
                            </form>
                            <hr>
                            <div class="table-responsive">
                                <?php
                                // include '../menu/myClassMenu.php';
                                $obj3 = new MyClassMenu;
                                include '../coon/config.php';
                                $tool3 = $coon->prepare(" SELECT DISTINCT sub_type_id FROM group_product_sub ");
                                $tool3->execute();
                                $n = 1;
                                while ($rowTool3 = $tool3->fetch(PDO::FETCH_ASSOC)) {

                                    // echo "hh->" . $rowTool3["sub_type_id"];

                                ?>
                                    <table class="table table-bordered">

                                        <thead>
                                            <tr>
                                                <p><?= $obj3->subMain3($rowTool3["sub_type_id"]) ?></p>
                                                <hr>
                                                <th scope="col">no.</th>
                                                <th scope="col" style="width: 30%;">ชื่อเมนู</th>
                                                <th scope="col" style="width: 18%;">รหัสสินค้า</th>
                                                <th scope="col" style="width: 10%;">hot menu</th>
                                                <th scope="col">แก้ไข / ลบ</th>
                                            </tr>
                                            <?= $obj3->subMenu3($rowTool3["sub_type_id"]) ?>

                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                    <div class="readAll"> <a href="listImgShow.php?id=<?= $rowTool3["sub_type_id"] ?>&p=l">ดูทั้งหมด</a> </div>
                                <?php
                                    $n++;
                                }

                                ?>
                            </div>

                        </div>
                    </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

    <!-- Modal editTool1 -->
    <div class="modal fade" id="editTool1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="insertData.php?g=editTool1" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูล</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body showTool1">
                        <!-- แสดงข้อมูลที่ถูกส่งมา -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal editTool2 -->
    <div class="modal fade" id="editTool2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="insertData.php?g=editTool2" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">แก้ไข Sub Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body showTool2">
                        <!-- แสดงข้อมูลที่ถูกส่งมา -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal editTool3 -->
    <div class="modal fade" id="editTool3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="insertData.php?g=editTool3" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">แก้ไข Sub Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body showTool3">
                        <!-- แสดงข้อมูลที่ถูกส่งมา -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-primary btn-sm">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->

    <script>
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link']],
            ],
            fontSizes: ['8', '9', '10', '11', '12', '16', '18', '24', '36', '48', '64', '82', '150']
        });
        $('#summernote1').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link']],
            ],
            fontSizes: ['8', '9', '10', '11', '12', '16', '18', '24', '36', '48', '64', '82', '150']
        });
        $('#summernote').summernote('fontSize', 14);

        $('#summernote1').summernote('fontSize', 14);

        $('#summernote3').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link']],
            ],
            fontSizes: ['8', '9', '10', '11', '12', '16', '18', '24', '36', '48', '64', '82', '150']
        });
        // $('#summernote3').summernote('fontSize', 14);



        $(document).ready(function() {

            $(".editTool1").click(function() {
                var dataTool1 = $(this).attr("data-id");
                var url = 'modalTool1.php';

                $.post(url, {
                    dataTool1: dataTool1
                }, function(data) {
                    $(".showTool1").html(data);
                });
            })

            $(".editTool2").click(function() {
                var dataTool2 = $(this).attr("data-id");
                var url = 'modalTool2.php';

                $.post(url, {
                    dataTool2: dataTool2
                }, function(data) {
                    $(".showTool2").html(data);
                });
            })

            $(".editTool3").click(function() {
                var dataTool3 = $(this).attr("data-id");
                var url = 'modalTool3.php';


                $.post(url, {
                    dataTool3: dataTool3
                }, function(data) {
                    $(".showTool3").html(data);
                });
            })

            /* ส่วนที่ 3 */
            $(".detailProduct").val("");
            // var upload = document.getElementById("fileImgProduct");

            // upload.onchange = function(e) {
            //     var files = e.target.files;
            //     // https://developer.mozilla.org/en-US/docs/Web/API/FileList#item
            //     var firstFile = files.item(1);
            //     var idstokeep = [0, 2]; // keep first `2` files from `multiple` selection
            //     var _files = Array.prototype.slice.call(files).splice(idstokeep[0], idstokeep[1]);
            //     console.log(files, files.length, _files, _files.length, firstFile);
            // };


            $(".btn3").click(function() {
                if ($("#mainMenuSub").val() == 0) {
                    Swal.fire({
                        title: "กรุณาเลือก ?",
                        text: "กรุณาเลือกสินค้าย่อยในหมวดที่ท่านต้องการ",
                        icon: "warning"
                    });
                    return false;
                }
                if ($("#nameProduct").val() == "") {
                    Swal.fire({
                        title: "กรุณาระบุ ?",
                        text: "กรุณาระบุชื่อสินค้าย่อย",
                        icon: "warning"
                    });
                    return false;
                }
                if ($("#numProduct").val() == "") {
                    Swal.fire({
                        title: "กรุณาระบุ ?",
                        text: "กรุณาระบุรหัสสินค้าย่อย",
                        icon: "warning"
                    });
                    return false;
                }
                if ($(".detailProduct").val() == "") {

                    Swal.fire({
                        title: "กรุณาระบุ ?",
                        text: "กรุณาระบุรายละเอียดสินค้าย่อย",
                        icon: "warning"
                    });
                    return false;
                }
                if ($("#fileImgProduct").val() == "") {

                    Swal.fire({
                        title: "กรุณาระบุ ?",
                        text: "กรุณาใส่รูปสินค้าย่อย อย่างน้อย 1 รูป",
                        icon: "warning"
                    });
                    return false;
                }
                if ($("#descriptionProduct").val() == "") {

                    Swal.fire({
                        title: "กรุณาระบุ ?",
                        text: "กรุณาใส่ description",
                        icon: "warning"
                    });
                    return false;
                }
                if ($("#keywordProduct").val() == "") {

                    Swal.fire({
                        title: "กรุณาระบุ ?",
                        text: "กรุณาใส่ keyword",
                        icon: "warning"
                    });
                    return false;
                }
            })


        });

        $(".deleteMainMenu").click(function() {
            var dataId = $(this).attr("data-id");
            var url = 'insertData.php?g=deleteMainMenu&id=' + dataId;

            Swal.fire({
                title: "กรุณายืนยันการลบ ?",
                text: "การลบข้อมูลในหัวข้อนี้จะมีผลกระทบกับเมนูอื่นๆ จะทำให้ไม่สามารถใช้งานได้",
                icon: 'question',
                showCancelButton: true,
                cancelButtonText: "ยกเลิก",
                confirmButtonText: "ลบ",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = url;
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });


        })

        $(".deleteSubMenu").click(function() {
            var dataId = $(this).attr("data-id");
            var url = 'insertData.php?g=deleteSubMenu&id=' + dataId;

            Swal.fire({
                title: "กรุณายืนยันการลบ ?",
                text: "การลบข้อมูลในหัวข้อนี้จะมีผลกระทบกับเมนูอื่นๆ จะทำให้ไม่สามารถใช้งานได้",
                icon: 'question',
                showCancelButton: true,
                cancelButtonText: "ยกเลิก",
                confirmButtonText: "ลบ",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = url;
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });


        })

        $(".deleteProductMenu").click(function() {
            var dataId = $(this).attr("data-id");
            var url = 'insertData.php?g=deleteProductMenu&id=' + dataId;

            Swal.fire({
                title: "กรุณายืนยันการลบ ?",
                text: "การลบข้อมูลในหัวข้อนี้จะมีผลกระทบกับเมนูอื่นๆ จะทำให้ไม่สามารถใช้งานได้",
                icon: 'question',
                showCancelButton: true,
                cancelButtonText: "ยกเลิก",
                confirmButtonText: "ลบ",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = url;
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });


        })


        $(".hotMenu").click(function() {
            if ($('.hotMenu').is(":checked")) {
                var upData = $(this).attr("data-id");
                var num = $(this).val();
                // alert(num);
                window.location.href = 'insertData.php?idUp=' + upData + '&num=' + num + '&g=hotMenu';
            } else {
                var upData = $(this).attr("data-id");
                var num = $(this).val();
                // alert(num);
                window.location.href = 'insertData.php?idUp=' + upData + '&num=' + num + '&g=hotMenu';
            }

        })
    </script>

</body>

</html>