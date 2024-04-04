<div class="productList" data-aos="fade-up" data-aos-delay="800">
    <div class="row">
        <?php
        include '../coon/config.php';
        $groupList = $coon->prepare(" SELECT* FROM group_product_sub  WHERE sub_group_id =?");
        $groupList->execute([$_GET["id"]]);
        while ($rowList = $groupList->fetch(PDO::FETCH_ASSOC)) {

        ?>
            <div class="col-md-4 col-lg-6 col-xl-3 col-sm-4  my-3 ">
                <div class="card borderColor">
                    <a href="productSub.php?id=<?= $rowList["sub_type_id"] ?>&name=<?= $rowList["sub_type_product"] ?>&group=<?= $rowList["sub_group_id"] ?>" class="tagA">
                        <div class="cardImg">
                            <img class="card-img-top" src="../images/product/<?= $rowList["sub_file"] ?>" alt="<?= $rowList["sub_type_product"] ?>" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $rowList["sub_type_product"] ?></h5>
                            <p class="card-text" style="font-size: 15px;"><b>รายละเอียดสินค้า :</b><?= strip_tags($rowList["sub_text"]); ?><br>
                        </div>
                    </a>
                </div>
            </div>

        <?php
        }
        ?>


    </div>
</div>