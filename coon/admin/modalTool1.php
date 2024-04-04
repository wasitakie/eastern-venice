<?php
session_start();

include '../coon/config.php';
include 'session/sessionAdmin.php';
?>
<style>
    .note-editable {
        background-color: black;
        color: white;
    }
</style>
<?php
include '../coon/config.php';
$dataTool1 = $_POST["dataTool1"];
$editTool1 = $coon->prepare(" SELECT* FROM group_product WHERE group_type_id = ? ");
$editTool1->execute([$dataTool1]);
$rowEditTool1 = $editTool1->fetch(PDO::FETCH_ASSOC)
?>

<div class="mb-3">
    <label for="" class="form-label">เมนูหลัก</label>
    <input type="text" class="form-control" name="menu" id="" aria-describedby="helpId" placeholder="" value="<?= $rowEditTool1["group_type"] ?>" />
</div>
<div class="mb-3">
    <label for="" class="form-label">คำอธิบายส่วนบน <span style="color: red">* ไม่ต้องกำหนดขนาด Font *</span></label>
    <textarea class="form-control note-editable" name="textTitle" id="summernoteEditTool1" rows="3"><?= $rowEditTool1["group_text"] ?></textarea>
</div>
<div class="mb-3">
    <label for="" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="" rows="3"><?= $rowEditTool1["group_description"] ?></textarea>
</div>
<div class="mb-3">
    <label for="" class="form-label">Keywords</label>
    <input type="text" class="form-control" name="keywords" id="" value="<?= $rowEditTool1["group_keywords"] ?>" />
    <input type="hidden" name="upData" value="<?= $dataTool1 ?>">
</div>

<script>
    $('#summernoteEditTool1').summernote({
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

    $('#summernoteEditTool1').summernote('fontSize', 14);
</script>