<?php

session_start();

include 'session/sessionAdmin.php';
include '../coon/config.php';
include '../menu/myClassMenu.php';
$objName = new MyClassMenu;
$dataTool2 = $_POST["dataTool2"];

$editTool2 = $coon->prepare(" SELECT* FROM group_product_sub WHERE sub_type_id = ? ");
$editTool2->execute([$dataTool2]);
$rowEditTool2 = $editTool2->fetch(PDO::FETCH_ASSOC);
?>

<style>
    .note-editable {
        background-color: black;
        color: white;
    }
</style>
<div class="mb-3 form-group">
    <label for="" class="form-label">เมนูหลัก</label>
    <select class="form-control" name="mainMenu" id="">
        <option value="<?= $rowEditTool2["sub_group_id"] ?>"><?= $objName->listName($rowEditTool2["sub_group_id"]) ?></option>
        <option>------</option>
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
    <input type="text" class="form-control" name="subName" id="" aria-describedby="helpId" placeholder="" value="<?= $rowEditTool2["sub_type_product"] ?>" />
</div>
<div class="mb-3">
    <label for="" class="form-label">คำอธิบายส่วนบน</label>
    <textarea class="form-control note-editable" name="subTitle" id="summernoteEditTool2" rows="3"><?= $rowEditTool2["sub_text"] ?></textarea>
</div>
<div class="mb-3">
    <label for="" class="form-label">ใส่รูป <span style="color: red;">* <?= $rowEditTool2["sub_file"] ?> *</span></label>
    <input type="file" class="form-control" name="fileImg" id="FilUploader" aria-describedby="helpId" placeholder="" />
</div>

<div class="mb-3">
    <label for="" class="form-label">Description</label>
    <textarea class="form-control" name="subDescription" id="" rows="3"><?= $rowEditTool2["sub_description"]  ?></textarea>
</div>
<div class="mb-3">
    <label for="" class="form-label">Keywords</label>
    <input type="text" class="form-control" name="subKeyword" id="" value="<?= $rowEditTool2["sub_keyword"] ?>" />
    <input type="hidden" name="upFile" value="<?= $rowEditTool2["sub_file"] ?>">
    <input type="hidden" name="upId" value="<?= $dataTool2 ?>">
</div>

<script>
    $("#FilUploader").change(function() {
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("กรุณาใส่รูปนามสกุลไฟล์ให้ถุกต้อง : " + fileExtension.join(', '));
            $("#FilUploader").val("");
        }
    });
    $('#summernoteEditTool2').summernote({
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

    $('#summernoteEditTool2').summernote('fontSize', 14);
</script>