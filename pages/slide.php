<div class="container-fluid slideMain" data-aos="fade-left" data-aos-delay="800">
    <div class="single-item">
        <?php
        include '../coon/config.php';
        $slide = $coon->prepare("SELECT * FROM slide ");
        $slide->execute();
        while ($rowSlide = $slide->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="slide">
                <img src="../images/banner/<?= $rowSlide["slide_img"] ?>" width="100%" alt="" srcset="">
            </div>
        <?php
        }
        ?>

    </div>
</div>