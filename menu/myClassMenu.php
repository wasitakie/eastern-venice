<?php
class MyClassMenu
{

    public function subMenu($n)
    {
        include '../coon/config.php';
        $sub = $coon->prepare(" SELECT* FROM group_product_sub WHERE sub_group_id = ?");
        $sub->execute([$n]);
        while ($rowSub = $sub->fetch(PDO::FETCH_ASSOC)) {
            echo '<li><a href="productSub.php?id=' . $rowSub["sub_type_id"] . '&name=' . $rowSub["sub_type_product"] . '&group=' . $rowSub["sub_group_id"] . '"><i class="fas fa-play"></i> ' . $rowSub["sub_type_product"] . '</a></li>';
        }
    }

    public function subMenu2($n)
    {
        include '../coon/config.php';
        $sub2 = $coon->prepare(" SELECT* FROM group_product_sub WHERE sub_group_id = ?");
        $sub2->execute([$n]);
        $n1 = 1;
        while ($rowSub2 = $sub2->fetch(PDO::FETCH_ASSOC)) {
            echo  '<tr class="">
            <td>' . $n1 . ' </td>
            <td>' . $rowSub2["sub_type_product"] . '</td>
            <td>
            <button type="button" class="btn btn-primary btn-sm editTool2" data-id="' . $rowSub2["sub_type_id"] . '" data-toggle="modal" data-target="#editTool2"> แก้ไข </button>
            <button id="" type="button" class="btn btn-danger btn-sm deleteSubMenu" data-id="' . $rowSub2["sub_type_id"] . '">ลบ</button>
            
            </td>
        </tr>';
            $n1++;
        }
    }



    public function listName($n)
    {
        include '../coon/config.php';
        $sub = $coon->prepare(" SELECT* FROM group_product WHERE group_type_id = ?");
        $sub->execute([$n]);
        $row = $sub->fetch(PDO::FETCH_ASSOC);
        return $row["group_type"];
    }

    public function subMain3($n)
    {
        include '../coon/config.php';
        $sub = $coon->prepare(" SELECT* FROM  group_product_sub WHERE sub_type_id = ?");
        $sub->execute([$n]);
        $row = $sub->fetch(PDO::FETCH_ASSOC);
        return $row["sub_type_product"];
    }

    public function subMenu3($n)
    {
        include '../coon/config.php';
        $sub3 = $coon->prepare(" SELECT * FROM product_images WHERE product_sub_id = ? ORDER BY product_images_id DESC LIMIT 0,3");
        $sub3->execute([$n]);
        $n1 = 1;
        while ($rowSub3 = $sub3->fetch(PDO::FETCH_ASSOC)) {

            if ($rowSub3["product_hot"] == 1) {
                $slideCheck = 'checked';
                $valueCheck = 0;
            } else {
                $slideCheck = '';
                $valueCheck = 1;
            }

            echo  '<tr class="">
            <td>' . $n1 . ' </td>
            <td>' . $rowSub3["product_images_name"] . '</td>
            <td>' . $rowSub3["product_images_num"] . '</td>
            <td class="text-center">
            <div class="custom-control custom-switch">
                 <input type="checkbox" class="custom-control-input hotMenu" id="' . $rowSub3["product_images_id"] . '" value="' . $valueCheck . '" data-id="' . $rowSub3["product_images_id"] . '" name="' . $rowSub3["product_images_id"] . '" ' . $slideCheck . '>
                 <label class="custom-control-label" for="' . $rowSub3["product_images_id"] . '" ></label>
            </div>
            </td>
            <td>
            <button type="button" class="btn btn-primary btn-sm editTool3" data-id="' . $rowSub3["product_images_id"] . '" data-toggle="modal" data-target="#editTool3"> แก้ไข </button>

            <button id="" type="button" class="btn btn-danger btn-sm deleteProductMenu" data-id="' . $rowSub3["product_images_id"] . '">ลบ</button>

            </td>

        </tr>';
            $n1++;
        }
    }

    public function subMenuList3($n)
    {
        include '../coon/config.php';
        $sub3 = $coon->prepare(" SELECT * FROM product_images WHERE product_sub_id = ? ORDER BY product_images_id DESC ");
        $sub3->execute([$n]);
        $n1 = 1;
        while ($rowSub3 = $sub3->fetch(PDO::FETCH_ASSOC)) {

            if ($rowSub3["product_hot"] == 1) {
                $slideCheck = 'checked';
                $valueCheck = 0;
            } else {
                $slideCheck = '';
                $valueCheck = 1;
            }

            echo  '<tr class="">
            <td>' . $n1 . ' </td>
            <td>' . $rowSub3["product_images_name"] . '</td>
            <td>' . $rowSub3["product_images_num"] . '</td>
            <td class="text-center">
            <div class="custom-control custom-switch">
                 <input type="checkbox" class="custom-control-input hotMenu" id="' . $rowSub3["product_images_id"] . '" value="' . $valueCheck . '" data-id="' . $rowSub3["product_images_id"] . '" name="' . $rowSub3["product_images_id"] . '" ' . $slideCheck . '>
                 <label class="custom-control-label" for="' . $rowSub3["product_images_id"] . '" ></label>
            </div>
            </td>
            <td>
            <button type="button" class="btn btn-primary btn-sm editTool3" data-id="' . $rowSub3["product_images_id"] . '" data-toggle="modal" data-target="#editTool3"> แก้ไข </button>

            <button id="" type="button" class="btn btn-danger btn-sm deleteProductMenu" data-id="' . $rowSub3["product_images_id"] . '">ลบ</button>

            </td>

        </tr>';
            $n1++;
        }
    }

    public function groupName($n)
    {
        include '../coon/config.php';
        $sub = $coon->prepare(" SELECT* FROM group_product WHERE group_type_id =?");
        $sub->execute([$n]);
        $row = $sub->fetch(PDO::FETCH_ASSOC);
        return $row["group_type"];
    }

    public function backGroup($n)
    {
        // include '../coon/config.php';
        // $sub = $coon->prepare(" SELECT* FROM group_product_sub WHERE sub_type_id =?");
        // $sub->execute([$n]);
        // $row = $sub->fetch(PDO::FETCH_ASSOC);
        // return $row["sub_group_id"];

        return $n;
    }
}
