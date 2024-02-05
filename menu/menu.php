<div class="mainMenu">
    <div class="headMenu">
        <h4><i class="fa-solid fa-layer-group"></i> หมวดหมู่สินค้า</h4>
    </div>
    <ul>
        <?php
        include '../menu/myClassMenu.php';
        $objMenu = new MyClassMenu;
        include '../coon/config.php';
        $menu = $coon->prepare(" SELECT* FROM group_product ");
        $menu->execute();
        while ($row = $menu->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <li>
                <div class="iconMenu"><a href=""><?= $row["group_type"] ?>
                    </a></div>
                <ul>
                    <?php $objMenu->subMenu($row["group_type_id"]) ?>
                </ul>
            </li>
        <?php
        }
        ?>
    </ul>
</div>