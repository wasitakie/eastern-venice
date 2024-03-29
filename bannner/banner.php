<div class="container-fluid bannerFluid">
    <div class="logo">
        <img src="../images/banner/logo3.png" alt="" srcset="">
    </div>
    <div class="search">
        <div class="hotLine">
            <h5>ติดต่อฝายขาย</h5>
            <p>HOT-LINE : 083-651-9291
                ,093-651-5197<br>
                T/F 02-404-0650
            </p>
        </div>
        /* หนูทำค้นหาสินค้า อยู่หน้า pages/search ค่ะ */
        <form action="search.php" method="get">
            <input type="text" name="q" class="searchBer" placeholder="ค้นหาสินค้า" value="<?= $_GET["q"] ?>">
            <input type="image" class="iconSearch" src="../images/banner/icons8-search-50.png" alt="Submit" width="25" height="25" id="searchIcon">
        </form>

    </div>
</div>

<!-- <div class="" id="searchBer"></div> -->

<div class="container-fluid menuBkTop">
    <div class="menuTop">
        <ul class="ul1">
            <li class="li1"><a href="../pages/index.php"><i class="fa-solid fa-house"></i> HOME</a></li>
            <li class="li1" id="li1"><a href=""><i class="fa-solid fa-layer-group"></i> PRODUCTS</a>
                <ul class="ul2">
                    <?php
                    include 'myClassMenuTop.php';
                    $objMenu1 = new MyClassMenuTop;
                    include '../coon/config.php';
                    $seT = $coon->prepare(" SELECT* FROM group_product ");
                    $seT->execute();
                    while ($row = $seT->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <li class="li2"><a href="productGroup.php?id=<?= $row["group_type_id"] ?>&name=<?= $row["group_type"] ?>"><?= $row["group_type"] ?></a>
                            <ul class="ul3">
                                <li class="li3"><?php $objMenu1->subMenuTop($row["group_type_id"]) ?></li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>
                </ul>

            </li>

            <li class="li1"><a href="../pages/index.php"><i class="fa-solid fa-fire"></i> HOT ITEM</a></li>
            <li class="li1"><a href="../pages/aboutUs.php"><i class="fa-solid fa-money-bill-1"></i> ABOUT US</a></li>
            <li class="li1"><a href="../pages/confirm-payment.php"><i class="fa-regular fa-address-card"></i> CUSTOMER</a></li>
            <li class="li1"><a href="../pages/contact.php"><i class="fa-solid fa-mobile-screen-button"></i> CONTACT</a></li>
        </ul>
    </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
    $(document).ready(function() {
        $('#searchIcon').click(function() {
            var search = $(this).val("");

            var url = "search.php"

            $.get(url, {
                search: search
            }, function(data) {
                $("#searchBer").html(data);
            })
        })
    })
</script> -->