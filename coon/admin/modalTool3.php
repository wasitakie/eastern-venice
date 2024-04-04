<?php
session_start();

include '../coon/config.php';
include '../menu/myClassMenu.php';

include 'session/sessionAdmin.php';
$dataTool3 = $_POST["dataTool3"];
$obj = new MyClassMenu;

$editTool3 = $coon->prepare(" SELECT* FROM product_images WHERE product_images_id =? ");
$editTool3->execute([$dataTool3]);
$rowedit3 = $editTool3->fetch(PDO::FETCH_ASSOC);

$upFile = $rowedit3["product_images_file"];
?>

<div class="mb-3">
    <label for="" class="form-label">สินค้าย่อย</label>
    <select class="form-control" name="subProduct" id="">
        <option value="<?= $rowedit3["product_sub_id"] ?>"><?= $obj->subMain3($rowedit3["product_sub_id"]) ?></option>
        <option value="0">-- สินค้าย่อย --</option>
        <?php

        $setedit3 = $coon->prepare("SELECT * FROM group_product_sub");
        $setedit3->execute();
        while ($rowstedit3 = $setedit3->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <option value="<?= $rowstedit3["sub_type_id"] ?>"><?= $rowstedit3["sub_type_product"] ?></option>
        <?php
        }
        ?>

    </select>
</div>


<div class="mb-3">
    <label for="" class="form-label">ชื่อสินค้า</label>
    <input type="text" class="form-control" name="nameProduct" id="nameProduct" aria-describedby="helpId" placeholder="" value="<?= $rowedit3["product_images_name"] ?>" />
</div>

<div class="mb-3">
    <label for="" class="form-label">รหัสสินค้า</label>
    <input type="text" class="form-control" name="numProduct" id="numProduct" aria-describedby="helpId" placeholder="" value="<?= $rowedit3["product_images_num"] ?>" />
</div>

<div class="mb-3">
    <label for="" class="form-label">รายละเอียดสินค้า</label>
    <textarea class="form-control detailProduct" name="detailProduct" id="summernoteEditTool3"><?= $rowedit3["product_images_detail"] ?></textarea>
</div>
<div class="mb-3">
    <label for="" class="form-label">ใส่รูป <span style="color:red;">* <?= $rowedit3["product_images_file"] ?> *</span></label>
    <input type="file" class="form-control" name="fileImgProduct[]" accept=" image/jpg, image/jpeg" id="FilUploader" multiple />
</div>

<div class="mb-3">
    <label for="" class="form-label">Description</label>
    <textarea class="form-control" name="descriptionProduct" id="descriptionProduct" rows="3"><?= $rowedit3["product_images_description"] ?></textarea>
</div>
<div class="mb-3">
    <label for="" class="form-label">Keywords</label>
    <input type="text" class="form-control" name="keywordProduct" id="keywordProduct" value="<?= $rowedit3["product_images_keyword"] ?>" />
    <input type="hidden" name="UpFileProduct" value=" <?= $upFile ?>">
    <input type="hidden" name="upIdProduct" value="<?= $dataTool3 ?>">
</div>

<script>
    $("#FilUploader").change(function() {
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("กรุณาใส่รูปนามสกุลไฟล์ให้ถุกต้อง : " + fileExtension.join(', '));
            $("#FilUploader").val("");
        }
    });
    $('#summernoteEditTool3').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link']],
        ],
        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36', '48', '64', '82', '150']
    });

    $('#summernoteEditTool3').summernote('fontSize', 14);
</script>