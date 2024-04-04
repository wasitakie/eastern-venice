<div class="productList">
    <div class="row">
        <?php

        include '../coon/config.php';
        $hotItem = $coon->prepare("SELECT * FROM product_images WHERE product_hot = ?");
        $hotItem->execute([1]);
        while ($rowItem = $hotItem->fetch(PDO::FETCH_ASSOC)) {

            $imgCount = explode("/", $rowItem["product_images_file"]);

            $groupName = $coon->prepare(" SELECT * FROM group_product_sub WHERE sub_type_id = ?");
            $groupName->execute([$rowItem["product_sub_id"]]);
            $rowGroupName = $groupName->fetch(PDO::FETCH_ASSOC);

            $rowGroupName["sub_group_id"];

        ?>
            <div class="col-md-4 col-lg-6 col-xl-3 col-sm-4 my-3 ">

                <div class="card borderColor">
                    <a href="slideProduct.php?id=<?= $rowItem["product_images_id"] ?>&name=<?= $rowGroupName["sub_type_product"]; ?>&name1=<?= $rowItem["product_images_name"] ?>&group=<?= $_GET["id"] ?>&main=<?= $rowGroupName["sub_group_id"] ?>" class="tagA">
                        <div class="cardImg">
                            <img class="card-img-top" src="../images/product/<?= $imgCount[0] ?>" alt="Title" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $rowItem["product_images_name"] ?></h5>
                            <p class="card-text"><b>รหัสสินค้า :</b> <?= $rowItem["product_images_num"] ?> <br>
                        </div>
                    </a>
                </div>
            </div>
        <?php
        }
        ?>


    </div>
</div>