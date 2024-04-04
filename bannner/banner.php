<div class="container-fluid bannerFluidFix">

    <?php
    include '../coon/config.php';
    $logo = $coon->prepare("SELECT * FROM logo ORDER BY logo_id DESC");
    $logo->execute();
    $rowLogo = $logo->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container-fluid bannerFluid">
        <div class="logo">
            <img src="../images/logo/<?= $rowLogo["logo_img"] ?>" alt="" srcset="">
        </div>
        <div class="search">
            <div class="hotLine">
                <h5>ติดต่อฝายขาย</h5>
                <p>HOT-LINE : 083-651-9291
                    ,093-651-5197<br>
                    T/F 02-404-0650
                </p>
            </div>

            <form action="search.php" method="get">
                <input type="text" name="q" class="searchBer" placeholder="ค้นหาสินค้า" value="<?= $_GET["q"] ?>">
                <input type="image" class="iconSearch" src="../images/banner/icons8-search-50.png" alt="Submit" width="25" height="25" id="searchIcon">
            </form>

        </div>
    </div>

    <!-- <div class="" id="searchBer"></div> -->

    <div class="container-fluid menuBkTop">
        <div class="hamMenu"><i class="fas fa-bars"></i></div>
        <div class="closeMenu"><i class="fas fa-times-circle"></i></div>
        <div class="menuTop">
            <ul class="ul1">
                <li class=" li1"><a href="../pages/index.php"><i class="fa-solid fa-house"></i> HOME</a></li>
                <li class="li1"><a href="../pages/index.php"><i class="fa-solid fa-fire"></i> HOT ITEM</a></li>
                <li class="li1"><a href=""><i class="fa-solid fa-layer-group"></i> PRODUCTS</a>
                    <ul class="ul2">
                        <?php
                        include 'myClassMenuTop.php';
                        $objMenu1 = new MyClassMenuTop;
                        include '../coon/config.php';
                        $seT = $coon->prepare(" SELECT* FROM group_product order by group_type asc");
                        $seT->execute();
                        while ($row = $seT->fetch(PDO::FETCH_ASSOC)) {
                        ?>

                            <li class="li2"><a href="productGroup.php?id=<?= $row["group_type_id"] ?>&name=<?= $row["group_type"] ?>"><?= $row["group_type"] ?></a>
                                <ul class="ul3">
                                    <li class="li3"> <?php $objMenu1->subMenuTop($row["group_type_id"]) ?></li>
                                </ul>
                            </li>

                        <?php
                        }
                        ?>

                    </ul>


                </li>
                <li class="li1"><a href="../pages/aboutUs.php"><i class="fa-solid fa-money-bill-1"></i> ABOUT US</a></li>
                <li class="li1"><a href="../pages/customer.php"><i class="fa-regular fa-address-card"></i> CUSTOMER</a>
                </li>
                <li class="li1"><a href="../pages/contact.php"><i class="fa-solid fa-mobile-screen-button"></i> CONTACT</a>
                </li>
            </ul>
        </div>

    </div>

    <!--- subMenu-->

    <div class="menuTopSub">
        <ul class="ul1">
            <li class=" li1"><a href="../pages/index.php"><i class="fa-solid fa-house"></i> HOME</a></li>
            <li class="li1"><a href="../pages/index.php"><i class="fa-solid fa-fire"></i> HOT ITEM</a></li>
            <li class="li1"><a href=""><i class="fa-solid fa-layer-group"></i> PRODUCTS</a>
                <ul class="ul2">
                    <?php
                    include '../coon/config.php';
                    $seT = $coon->prepare(" SELECT* FROM group_product order by group_type asc");
                    $seT->execute();
                    while ($row = $seT->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                        <li class="li2"><a href="productGroup.php?id=<?= $row["group_type_id"] ?>&name=<?= $row["group_type"] ?>"><?= $row["group_type"] ?></a>
                            <ul class="ul3">
                                <li class="li3"> <?php $objMenu1->subMenuTopSub($row["group_type_id"]) ?></li>
                            </ul>
                        </li>

                    <?php
                    }
                    ?>

                </ul>


            </li>
            <li class="li1"><a href="../pages/aboutUs.php"><i class="fa-solid fa-money-bill-1"></i> ABOUT US</a></li>
            <li class="li1"><a href="../pages/confirm-payment.php"><i class="fa-regular fa-address-card"></i> CUSTOMER</a>
            </li>
            <li class="li1"><a href="../pages/contact.php"><i class="fa-solid fa-mobile-screen-button"></i> CONTACT</a>
            </li>
        </ul>
    </div>


</div>




<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
    $(document).ready(function() {

        $(".closeMenu").css("display", "none");
        $(".hamMenu").click(function() {
            $(".closeMenu").css("display", "block");
            $(".menuTopSub").css("display", "block");
            $(".hamMenu").css("display", "none");
        });

        $(".closeMenu").click(function() {
            $(".hamMenu").css("display", "block");
            $(".menuTopSub").css("display", "none");
            $(".closeMenu").css("display", "none");
        });
    })
</script>