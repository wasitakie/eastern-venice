<?php
session_start();

include '../coon/config.php';
include 'session/sessionAdmin.php';
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

<?php
include '../coon/config.php';

if ($_GET["g"] == "editTool1") {

    $up = $coon->prepare(" UPDATE group_product SET group_type= ?,group_text=?,group_description=?,group_keywords=? WHERE group_type_id = ?  ");
    $up->execute([$_POST["menu"], $_POST["textTitle"], $_POST["description"], $_POST["keywords"], $_POST["upData"]]);

    if ($up) {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "แก้ไขข้อมูล",
            text: "แก้ไขข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
          }).then(function() {
            window.location.href = "menuProduct.php";
        });
       });
        </script>';
    } else {
        echo "no";
    }
}

if ($_GET["g"] == "editTool2") {

    if (empty($_FILES["fileImg"]["name"])) {
        $new_images = $_POST["upFile"];
    } else {
        $images = $_FILES["fileImg"]["tmp_name"];
        $new_images = "Thumbnails_" . $_FILES["fileImg"]["name"];
        //copy($_FILES["fileImg"]["tmp_name"], "../images/product/" . $_FILES["fileImg"]["name"]);
        $width = 450; //*** Fix Width & Heigh (Autu caculate) ***//
        $size = GetimageSize($images);
        $height = round($width * $size[1] / $size[0]);
        $images_orig = ImageCreateFromJPEG($images);
        $photoX = ImagesX($images_orig);
        $photoY = ImagesY($images_orig);
        $images_fin = ImageCreateTrueColor($width, $height);
        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
        ImageJPEG($images_fin, "../images/product/" . $new_images);
        ImageDestroy($images_orig);
        ImageDestroy($images_fin);
    }

    $up = $coon->prepare(" UPDATE group_product_sub SET sub_type_product= ?,sub_group_id= ?,sub_text= ?,sub_file= ?,sub_description= ?,sub_keyword= ? WHERE sub_type_id =? ");
    $up->execute([$_POST["subName"], $_POST["mainMenu"], $_POST["subTitle"], $new_images, $_POST["subDescription"], $_POST["subKeyword"], $_POST["upId"]]);

    if ($up) {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "แก้ไขข้อมูล",
            text: "แก้ไขข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
          }).then(function() {
            window.location.href = "menuProduct.php";
        });
       });
        </script>';
    } else {
        echo "no";
    }
}

if ($_GET["g"] == "editTool3") {

    if ($_FILES["fileImgProduct"]["name"][0] == "") {
        $nameImgUse = $_POST["UpFileProduct"];
    } else {

        echo $imgCount = count($_FILES["fileImgProduct"]["name"]);
        for ($i = 0; $i <= $imgCount - 1; $i++) {

            $images = $_FILES["fileImgProduct"]["tmp_name"][$i];
            $new_images = "Thumbnails_" . $_FILES["fileImgProduct"]["name"][$i];
            //copy($_FILES["fileImg"]["tmp_name"], "../images/product/" . $_FILES["fileImg"]["name"]);
            $width = 450; //*** Fix Width & Heigh (Autu caculate) ***//
            $size = GetimageSize($images);
            $height = round($width * $size[1] / $size[0]);
            $images_orig = ImageCreateFromJPEG($images);
            $photoX = ImagesX($images_orig);
            $photoY = ImagesY($images_orig);
            $images_fin = ImageCreateTrueColor($width, $height);
            ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
            ImageJPEG($images_fin, "../images/product/" . $new_images);
            ImageDestroy($images_orig);
            ImageDestroy($images_fin);

            $nameImg .= $new_images . "/";
        }

        $nameImgUse = substr($nameImg, 0, -1);
    }

    $up = $coon->prepare(" UPDATE product_images SET product_sub_id= ?,product_images_name= ?,product_images_num= ?,product_images_detail= ?,product_images_file= ?,product_images_description= ?,product_images_keyword= ? WHERE product_images_id = ?");
    $up->execute([$_POST["subProduct"], $_POST["nameProduct"], $_POST["numProduct"], $_POST["detailProduct"], $nameImgUse, $_POST["descriptionProduct"], $_POST["keywordProduct"], $_POST["upIdProduct"]]);

    if ($up) {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "แก้ไขข้อมูล",
            text: "แก้ไขข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
          }).then(function() {
            window.location.href = "menuProduct.php";
        });
       });
        </script>';
    } else {
        echo "no";
    }
}

if ($_GET["g"] == "insertProduct3") {

    $imgCount = count($_FILES["fileImgProduct"]["name"]);
    for ($i = 0; $i <= $imgCount - 1; $i++) {

        $images = $_FILES["fileImgProduct"]["tmp_name"][$i];
        $new_images = "Thumbnails_" . $_FILES["fileImgProduct"]["name"][$i];
        //copy($_FILES["fileImg"]["tmp_name"], "../images/product/" . $_FILES["fileImg"]["name"]);
        $width = 450; //*** Fix Width & Heigh (Autu caculate) ***//
        $size = GetimageSize($images);
        $height = round($width * $size[1] / $size[0]);
        $images_orig = ImageCreateFromJPEG($images);
        $photoX = ImagesX($images_orig);
        $photoY = ImagesY($images_orig);
        $images_fin = ImageCreateTrueColor($width, $height);
        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
        ImageJPEG($images_fin, "../images/product/" . $new_images);
        ImageDestroy($images_orig);
        ImageDestroy($images_fin);

        $nameImg .= $new_images . "/";
    }

    $nameImgUse = substr($nameImg, 0, -1);

    $insert = $coon->prepare(" INSERT INTO product_images (product_sub_id, product_images_name, product_images_num, product_images_detail, product_images_file, product_images_description, product_images_keyword, product_hot) VALUES (?,?,?,?,?,?,?,?)");
    $insert->execute([$_POST["mainMenuSub"], $_POST["nameProduct"], $_POST["numProduct"], $_POST["detailProduct"], $nameImgUse, $_POST["descriptionProduct"], $_POST["keywordProduct"], 0]);

    if (empty($insert)) {
        echo 'no';
    } else {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "บันทึกข้อมูล",
            text: "บันทึกข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
			
          }).then(function() {
            window.location.href = "menuProduct.php";
        });
       });
        </script>';
    }
}

if ($_GET["h"] == "insertHome") {
    $insertHome = $coon->prepare("UPDATE home SET home_description= ?,home_keyword= ?,home_text= ? WHERE home_id= ?");
    $insertHome->execute([$_POST["descriptionHome"], $_POST["keywordHome"], $_POST["textHome"], $_POST["upHome"]]);
    if ($insertHome) {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "บันทึกข้อมูล",
            text: "บันทึกข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
          }).then(function() {
            window.location.href = "menuProduct.php";
        });
       });
        </script>';
    } else {
        echo 'no';
    }
}

if ($_GET["g"] == 'inMainMenu') {
    $insert = $coon->prepare("INSERT INTO group_product (group_type, group_text, group_description, group_keywords) VALUES (?,?,?,?)");
    $insert->execute([$_POST["mainName"], $_POST["detail"], $_POST["description"], $_POST["keywords"]]);
    if ($insert) {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "บันทึกข้อมูล",
            text: "บันทึกข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
          }).then(function() {
            window.location.href = "menuProduct.php";
        });
       });
        </script>';
    } else {
        echo 'no';
    }
}

if ($_GET["g"] == "deleteMainMenu") {
    $delete = $coon->prepare("DELETE FROM group_product WHERE group_type_id =? ");
    $delete->execute([$_GET["id"]]);
    if ($delete) {
        header("location: menuProduct.php");
    } else {
        echo 'no';
    }
}


if ($_GET["g"] == 'inSubMenu') {

    if ($_FILES["fileImg"]["name"] == "") {
        $new_images = "";
    } else {
        $images = $_FILES["fileImg"]["tmp_name"];
        $new_images = "SubImage_" . $_FILES["fileImg"]["name"];
        //copy($_FILES["fileImg"]["tmp_name"], "../images/product/" . $_FILES["fileImg"]["name"]);
        $width = 450; //*** Fix Width & Heigh (Autu caculate) ***//
        $size = GetimageSize($images);
        $height = round($width * $size[1] / $size[0]);
        $images_orig = ImageCreateFromJPEG($images);
        $photoX = ImagesX($images_orig);
        $photoY = ImagesY($images_orig);
        $images_fin = ImageCreateTrueColor($width, $height);
        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
        ImageJPEG($images_fin, "../images/product/" . $new_images);
        ImageDestroy($images_orig);
        ImageDestroy($images_fin);

        $nameImg .= $new_images . "/";
    }


    $insert = $coon->prepare("INSERT INTO group_product_sub (sub_type_product, sub_group_id, sub_text, sub_file, sub_description, sub_keyword) VALUES (?,?,?,?,?,?)");
    $insert->execute([$_POST["subMenu"], $_POST["mainMenu"], $_POST["detail"], $new_images, $_POST["description"], $_POST["keyword"]]);
    if ($insert) {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "บันทึกข้อมูล",
            text: "บันทึกข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
			showConfirmButton: true
          }).then(function() {
            window.location.href = "menuProduct.php";
        });
       });
        </script>';
    } else {
        echo 'no';
    }
}

if ($_GET["g"] == "deleteSubMenu") {
    $delete = $coon->prepare("DELETE FROM  group_product_sub WHERE sub_type_id =? ");
    $delete->execute([$_GET["id"]]);
    if ($delete) {
        header("location: menuProduct.php");
    } else {
        echo 'no';
    }
}

if ($_GET["g"] == "deleteProductMenu") {
    $delete = $coon->prepare("DELETE FROM  product_images WHERE product_images_id =? ");
    $delete->execute([$_GET["id"]]);
    if ($delete) {
        header("location: menuProduct.php");
    } else {
        echo 'no';
    }
}

if ($_GET["g"] == "hotMenu") {
    $update = $coon->prepare("UPDATE product_images SET product_hot = ? WHERE product_images_id = ? ");
    $update->execute([$_GET["num"], $_GET["idUp"]]);
    if ($update) {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "บันทึกข้อมูล",
            text: "บันทึกข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
          }).then(function() {
            window.location.href = "menuProduct.php";
        });
       });
        </script>';
    } else {
        echo 'no';
    }
}


if ($_GET["g"] == "insertSlide") {

    $imgSlide = $_FILES["imgSlide"]["name"];
    copy($_FILES["imgSlide"]["tmp_name"], "../images/banner/" . $imgSlide . "");

    $slide = $coon->prepare("INSERT INTO slide(slide_img) VALUES (?)");
    $slide->execute([$imgSlide]);


    if ($slide) {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "บันทึกข้อมูล",
            text: "บันทึกข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
          }).then(function() {
            window.location.href = "slide.php";
        });
       });
        </script>';
    } else {
        echo 'no';
    }
}

if ($_GET["g"] == "deleteSlide") {
    $delete = $coon->prepare("DELETE FROM slide WHERE slide_id =? ");
    $delete->execute([$_GET["id"]]);
    if ($delete) {
        header("location: slide.php");
    } else {
        echo 'no';
    }
}


if ($_GET["g"] == "updateAboutUs") {


    $upCon = $coon->prepare("UPDATE aboutus SET aboutus_detail= ?  WHERE aboutus_id= ?");
    $upCon->execute([$_POST["aboutus"], $_POST["upContact"]]);
    if ($upCon) {
        echo '<script>
       $(document).ready(function(){
        Swal.fire({
            title: "บันทึกข้อมูล",
            text: "บันทึกข้อมูลเรียบร้อยแล้ว!",
            icon: "success",
            timer:1500,
          }).then(function() {
            window.location.href = "aboutUs.php";
        });
       });
        </script>';
    } else {
        echo 'no';
    }
}
