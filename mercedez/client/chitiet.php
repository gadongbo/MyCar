<?php include('../config/constants.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giá Bán C300 AMG</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/chitiet.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>

<body>
    <!-- wrap -->

    <?php include('./particals/navbar.php') ?>
    </div>
    <?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        // $sql = "SELECT * FROM product where id_product=$id";
        // $sqlSpecificProduct = "SELECT * FROM specific_product where id_product=$id";
        $sql = "SELECT * FROM product, specific_product where product.id_product=$id AND specific_product.id_product=$id";
        $res = mysqli_query($conn, $sql) or  die(mysqli_error($mysqli_query($conn, $sql)));
        // $resSpecificProduct = mysqli_query($conn, $sqlSpecificProduct) or  die(mysqli_error($mysqli_query($conn, $sqlSpecificProduct)));

        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
    ?>

                <div class="title">
                    <h4><?php echo $row["name_product"] ?></h4>
                </div>
                <div class="container">
                    <div class="left">
                        <div class="detail">
                            <div class="anh">
                                <img src="../image/product/<?php echo $row["image"] ?>" alt="">
                            </div>
                            <div class="price">
                                <h4>GIÁ TỪ: <?php echo $row["price"] ?></h4>
                            </div>
                            <button type="button" class="btn btn-secondary"><i class="fas fa-calculator"></i>Tính Giá Lăn Bánh</button>
                        </div>
                        <div class="promotion">
                            <div class="khuyenmai">
                                <span>KHUYẾN MÃI MUA XE</span><br>
                                <span class="name"><?php echo $row["name_product"] ?></span>
                                <hr>

                            </div>
                            <div class="content">
                                <p>Mercedes Phú Mỹ Hưng Đại Lý Lớn Nhất Đông Nam Á</p>
                                <i>Giảm 50% thuế trước bạ khi khách hàng liên hệ</i>
                                <ul>
                                    <li>
                                        Chiết khấu cao, giảm trực tiếp tiền mặt
                                        khi khách ký hợp đồng mua xe
                                    </li>
                                    <li>Tặng bộ phụ kiện cho xe, quà cá nhân giá trị.</li>
                                    <li>Hỗ trợ mua xe trả góp lãi suất thấp, thủ tục
                                        nhanh chóng, xét duyệt nhanh.</li>
                                    <li>Chính sách hậu mãi cho khách hàng cực lớn</li>
                                    <li>Lái Thử/ Giao xe tận nhà (24/24)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <img src="../image/mec-logo-300x300.png" alt="">
                        <h5>PHỤ TRÁCH KINH DOANH</h5>
                        <span><i class="fas fa-phone-alt"></i>0339509999</span>
                    </div>

                </div>
                <div class="parameter">
                    <h3>THÔNG SỐ <?php echo $row["name_product"] ?>
                    </h3>
                    <table>
                        <tbody>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Tên xe</td>
                                <td style="height: 24px;width: 369px"><?php echo $row["name_product"] ?></td>
                            </tr>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">D x R x C </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["long_product"] ?> x <?php echo $row["width_product"] ?> x <?php echo $row["height"] ?> (mm)
                                </td>
                            </tr>
                            <!-- <tr style="height: 24px">
                    <td style="height: 24px;width: 277px">Chiều dài cơ sở</td>
                    <td style="height: 24px;width: 369px">2699 (mm)
                    </td>
                </tr> -->
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Tự trọng</td>
                                <td style="height: 24px;width: 369px"><?php echo $row["weight"] ?> (kg)
                                </td>
                            </tr>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Động cơ </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["engine"] ?>
                                </td>
                            </tr>
                            <!-- <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Dung tích công tác </td>
                                <td style="height: 24px;width: 369px">1595 (cc)

                                </td>
                            </tr> -->
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Công suất cực đại </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["max_power"] ?>


                                </td>
                            </tr>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Mô-men xoắn cực đại </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["max_torque"] ?>
                                </td>
                            </tr>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Hộp số </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["gear"] ?>
                                </td>
                            </tr>
                            <!-- <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Dẫn động </td>
                                <td style="height: 24px;width: 369px">Cầu trước
                                </td>
                            </tr> -->
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Tăng tốc </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["speed_up"] ?>

                                </td>
                            </tr>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Vận tốc tối đa </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["max_speed"] ?>
                                </td>
                            </tr>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Loại nhiên liệu </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["fuel_type"] ?>

                                </td>
                            </tr>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Mức tiêu thụ nhiên liệu, kết hợp </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["fuel_consum_normal"] ?>

                                </td>
                            </tr>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Mức tiêu thụ nhiên liệu, trong đô thị </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["fuel_consum_city"] ?>

                                </td>
                            </tr>
                            <tr style="height: 24px">
                                <td style="height: 24px;width: 277px">Mức tiêu thụ nhiên liệu, ngoài đô thị </td>
                                <td style="height: 24px;width: 369px"><?php echo $row["fuel_consum_country_side"] ?>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
    <?php }
        }
    } ?>




    <div class="types">
        <h3>MỘT SỐ LOẠI XE KHÁC</h3>
    </div>
    <!-- product -->

    <div class="products">
        <?php

        $sql = "SELECT * FROM product LIMIT 4";
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
        <!-- /product -->
    </div>
    <?php include('./particals/footer.php') ?>
    <!-- /wrap -->
</body>

</html>