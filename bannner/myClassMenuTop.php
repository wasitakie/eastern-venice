<?php
class MyClassMenuTop
{

    public function subMenuTop($n)
    {
        include '../coon/config.php';
        $sub = $coon->prepare(" SELECT* FROM group_product_sub WHERE sub_group_id = ?");
        $sub->execute([$n]);
        while ($rowSub = $sub->fetch(PDO::FETCH_ASSOC)) {
            echo '<a href="productSub.php?id=' . $rowSub["sub_type_id"] . '&name=' . $rowSub["sub_type_product"] . '&group=' . $rowSub["sub_group_id"] . '"><i class="fas fa-play"></i> ' . $rowSub["sub_type_product"] . '</a>';
        }
    }
}
