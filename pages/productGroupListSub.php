<div class="productList">
    <div class="row">
        <?php
        include '../coon/config.php';
        $groupList = $coon->prepare(" SELECT* FROM product_images  WHERE product_sub_id =?");
        $groupList->execute([$_GET["id"]]);
        while ($rowList = $groupList->fetch(PDO::FETCH_ASSOC)) {

            $image1 = explode("/", $rowList["product_images_file"]);

        ?>
            <div class="col-md-3 col-lg-6 col-xl-3  my-3 ">
                <div class="card borderColor">
                    <a href="slideProduct.php?id=<?= $rowList["product_images_id"] ?>&name=<?= $_GET["name"] ?>&name1=<?= $rowList["product_images_name"] ?>&group=<?= $_GET["id"] ?>&main=<?= $_GET["group"] ?>" class="tagA">
                        <div class="cardImg">
                            <img class="card-img-top" src="../images/product/<?= $image1[0] ?>" alt="<?= $rowList["product_images_name"] ?>" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $rowList["product_images_name"] ?></h5>
                            <p class="card-text" style="font-size: 15px;"><b>รหัสสินค้า :</b> <?= $rowList["product_images_num"]; ?><br>
                        </div>
                    </a>
                </div>
            </div>

        <?php
        }
        ?>


    </div>
</div>