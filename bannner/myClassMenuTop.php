<?php
class MyClassMenuTop
{

    public function subMenuTop($n)
    {
        include '../coon/config.php';
        $sub = $coon->prepare(" SELECT* FROM group_product_sub WHERE sub_group_id = ?");
        $sub->execute([$n]);
        while ($rowSub = $sub->fetch(PDO::FETCH_ASSOC)) {
            echo '<a href=""><i class="fas fa-play"></i> ' . $rowSub["sub_type_product"] . '</a>';
        }
    }
}
