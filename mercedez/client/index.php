<?php include('../config/constants.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercedes-Benz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <!-- wrap -->
    <div class="wrap">
        <?php include('./particals/navbar.php') ?>
    </div>
    <!-- slide -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../image/slider-mec-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../image/slider-mec-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../image/slider-mec-3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-right: 145px !important;  width: 18px;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left: 145px !important;  width: 18px;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /slide -->
    <h2>CÁC DÒNG XE MERCEDES BÁN CHẠY NHẤT</h2>
    <div class="products">
        <?php

        $sql = "SELECT * FROM product LIMIT 8";
        $res = mysqli_query($conn, $sql) or  die(mysqli_error($mysqli_query($conn, $sql)));
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
        ?>
                <div class="product">
                    <a href="./chitiet.php?id=<?php echo $row["id_product"] ?>"><img src="../image/product/<?php echo $row["image"] ?>" alt=""></a>
                    <a href="./chitiet.php?id=<?php echo $row["id_product"] ?>"><?php echo $row["name_product"] ?></a><br>
                    <span class="gia">Giá: <?php echo $row["price"] ?>
                        <!-- </span><span class="sale">Trả góp từ 20%</span> -->
                </div>
        <?php }
        } ?>

    </div>
    <h2>TIN TỨC</h2>
    <!-- tin tức -->
    <div class="news">
        <div class="new1">
            <img src="../image/tt1.jpg" alt="">
            <p class="ts">Thông số kỹ thuật GLC 200 và GLC 200 4
                Matic 2020 Ra mắt tại Việt Nam
            </p>
            <p>
                Sau lô xe GLC 300 AMG 4Matic nhập Đức được giới
                thiệu trước Tết, Mercedes-Benz Việt Nam (MBV) sắp sửa
                giới thiệu hai phiên bản GLC 200...
            </p>
        </div>

        <div class="new2">
            <img src="../image/tt2.jpg" alt="">
            <p class="ts">Thông số kỹ thuật GLC 200 và GLC 200 4
                Matic 2020 Ra mắt tại Việt Nam
            </p>
            <p>
                Sau lô xe GLC 300 AMG 4Matic nhập Đức được giới
                thiệu trước Tết, Mercedes-Benz Việt Nam (MBV) sắp sửa
                giới thiệu hai phiên bản GLC 200...
            </p>
        </div>

        <div class="new3">
            <img src="../image/tt3.jpg" alt="">
            <p class="ts">Thông số kỹ thuật GLC 200 và GLC 200 4
                Matic 2020 Ra mắt tại Việt Nam
            </p>
            <p>
                Sau lô xe GLC 300 AMG 4Matic nhập Đức được giới
                thiệu trước Tết, Mercedes-Benz Việt Nam (MBV) sắp sửa
                giới thiệu hai phiên bản GLC 200...
            </p>
        </div>

    </div>

    <!-- /tin tức-->

    <!-- khách hàng -->
    <h2>KHÁCH HÀNG CỦA MERCEDES-BENZ</h2>
    <div class="customer">
        <img src="../image/kh1.jpg" alt="" class="kh1">
        <img src="../image/kh2.jpg" alt="" class="kh2">
        <img src="../image/kh3.jpg" alt="" class="kh3">
    </div>
    <!-- /khách hàng -->

    <!-- /footer -->
    <?php include('./particals/footer.php') ?>

    </div>
    <!-- /wrap -->
</body>

</html>