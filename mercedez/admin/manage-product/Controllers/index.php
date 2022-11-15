<?php

if (isset($_POST["addProduct"])) {

    // echo $nameProduct . $price .$color;
    // echo $_FILES['image'];
    if (isset($_FILES['image']['name'])) {
        $imageName = $_FILES['image']['name'];
        $sourcePath = $_FILES['image']['tmp_name'];
        $destinationPath = "/Applications/XAMPP/xamppfiles/htdocs/mercedez/image/product/" . $imageName;
        if (move_uploaded_file($sourcePath, $destinationPath)) {
            $nameProduct = $_POST["nameProduct"];
            $price = $_POST["price"];
            $color = $_POST["color"];
            $long_product = $_POST["long_product"];
            $width_product = $_POST["width_product"];
            $height = $_POST["height"];
            $weight = $_POST["weight"];
            $engine = $_POST["engine"];
            $cubic = $_POST["cubic"];
            $max_power = $_POST["max_power"];
            $max_torque = $_POST["max_torque"];
            $gear = $_POST["gear"];
            $wheel_drive = $_POST["wheel_drive"];
            $speed_up = $_POST["speed_up"];
            $max_speed = $_POST["max_speed"];
            $fuel_type = $_POST["fuel_type"];
            $fuel_consum_normal = $_POST["fuel_consum_normal"];
            $fuel_consum_city = $_POST["fuel_consum_city"];
            $fuel_consum_country_side = $_POST["fuel_consum_country_side"];

            $sql = "INSERT INTO product (name_product, price, color, image) VALUES ('$nameProduct', '$price', '$color', '$imageName')";
            $res =  mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));

            $id_product = mysqli_insert_id($conn);

            // mysqli_free_result( $res );

            $sqlSpecificProduct = "INSERT INTO specific_product (id_product,long_product, width_product, height, weight, 
            engine, cubic, max_power, max_torque, gear, wheel_drive, speed_up, max_speed, fuel_type, fuel_consum_normal, 
            fuel_consum_city, fuel_consum_country_side) VALUES ('$id_product', '$long_product', '$width_product', '$height', '$weight', '$engine', '$cubic', '$max_power', '$max_torque', 
            '$gear', '$wheel_drive', '$speed_up', '$max_speed', '$fuel_type', '$fuel_consum_normal', '$fuel_consum_city', '$fuel_consum_country_side')";

            //             $sqlDeleteContract = 'ALTER TABLE specific_product
            // DROP FOREIGN KEY `specific_product_ibfk_1`';

            //             $sqlAddContract = 'ALTER TABLE specific_product
            // ADD CONSTRAINT `specific_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)';

            // mysqli_query($conn, $sqlDeleteContract) or die(mysqli_error($mysqli_query($conn, $sqlDeleteContract)));




            $resQuerySpecificTable =  mysqli_query($conn, $sqlSpecificProduct) or die(mysqli_error($mysqli_query($conn, $sqlSpecificProduct)));
            // mysqli_free_result( $resQuerySpecificTable );
            // mysqli_query($conn, $sqlAddContract) or die(mysqli_error($mysqli_query($conn, $sqlAddContract)));

            if ($res && $resQuerySpecificTable) {
                header("Location:" . SITEURL . "admin/index.php?page_layout=product", true);
                $_SESSION["actionAlert"] = "Add product success";
                $_SESSION["actionType"] = "success";
                // sleep(3);
                // unset( $_SESSION["actionAlert"]);
            } else {
                $_SESSION["actionAlert"] = "Add product fail";
                $_SESSION["actionType"] = "danger";
            }
        } else {
            $_SESSION["actionAlert"] = "Add image fail";
            $_SESSION["actionType"] = "danger";
        }
    } else {
        $_SESSION["actionAlert"] = "Not have image!";
        $_SESSION["actionType"] = "danger";
    }
}

if (isset($_GET["action"]) && isset($_GET["id"]) && $_GET["action"] == 'delete' && $_GET["page_layout"] == 'product') {
    $id = $_GET["id"];
    $sql = "DELETE FROM product WHERE id_product=$id";
    $sqlSpecificProduct = "DELETE FROM specific_product WHERE id_product=$id";

    $sqlDeleteContract = 'ALTER TABLE specific_product
    DROP FOREIGN KEY `specific_product_ibfk_1`';

    $sqlAddContract = 'ALTER TABLE specific_product ADD CONSTRAINT `specific_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)';

    // mysqli_query($conn, $sqlDeleteContract) or die(mysqli_error($mysqli_query($conn, $sqlDeleteContract)));

    $res = mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));
    $resQuerySpecificTable =  mysqli_query($conn, $sqlSpecificProduct) or die(mysqli_error($mysqli_query($conn, $sqlSpecificProduct)));

    // mysqli_query($conn, $sqlAddContract) or die(mysqli_error($mysqli_query($conn, $sqlAddContract)));

    if ($res && $resQuerySpecificTable) {
        header("Location:" . SITEURL . "admin/index.php?page_layout=product", true);
        $_SESSION["actionAlert"] = "Delete product success";
        $_SESSION["actionType"] = "success";
    } else {
        $_SESSION["actionAlert"] = "Delete product fail";
        $_SESSION["actionType"] = "danger";
    }
}

if (isset($_POST["updateProduct"])) {
    if (isset($_FILES['image']['name'])) {
        $imageName = $_FILES['image']['name'];
        $sourcePath = $_FILES['image']['tmp_name'];
        $destinationPath = "/Applications/XAMPP/xamppfiles/htdocs/mercedez/image/product/" . $imageName;

        $nameProduct = $_POST["nameProduct"];
        $price = $_POST["price"];
        $color = $_POST["color"];
        $long_product = $_POST["long_product"];
        $width_product = $_POST["width_product"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        $engine = $_POST["engine"];
        $cubic = $_POST["cubic"];
        $max_power = $_POST["max_power"];
        $max_torque = $_POST["max_torque"];
        $gear = $_POST["gear"];
        $wheel_drive = $_POST["wheel_drive"];
        $speed_up = $_POST["speed_up"];
        $max_speed = $_POST["max_speed"];
        $fuel_type = $_POST["fuel_type"];
        $fuel_consum_normal = $_POST["fuel_consum_normal"];
        $fuel_consum_city = $_POST["fuel_consum_city"];
        $fuel_consum_country_side = $_POST["fuel_consum_country_side"];
        $id = $_GET["id"];
        if (move_uploaded_file($sourcePath, $destinationPath)) {


            $sql = "UPDATE product  SET name_product = '$nameProduct', price = '$price', color = '$color', image = '$imageName' WHERE id_product=$id ";

            $sqlSpecificProduct = "UPDATE specific_product SET long_product = '$long_product', width_product = '$width_product', height = '$height',
            weight = '$weight', engine = '$engine', cubic = '$cubic', max_power = '$max_power', max_torque = '$max_torque', gear = '$gear', wheel_drive = '$wheel_drive',
            speed_up = '$speed_up', max_speed = '$max_speed', fuel_type = '$fuel_type', fuel_consum_normal = '$fuel_consum_normal', fuel_consum_city = '$fuel_consum_city',
            fuel_consum_country_side = '$fuel_consum_country_side' WHERE id_product=$id ";

            $sqlDeleteContract = 'ALTER TABLE specific_product
            DROP FOREIGN KEY `specific_product_ibfk_1`';

            $sqlAddContract = 'ALTER TABLE specific_product
            ADD CONSTRAINT `specific_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)';

            // mysqli_query($conn, $sqlDeleteContract) or die(mysqli_error($mysqli_query($conn, $sqlDeleteContract)));

            $res =  mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));

            $resQuerySpecificTable =  mysqli_query($conn, $sqlSpecificProduct) or die(mysqli_error($mysqli_query($conn, $sqlSpecificProduct)));


            // mysqli_query($conn, $sqlAddContract) or die(mysqli_error($mysqli_query($conn, $sqlAddContract)));
            if ($res && $resQuerySpecificTable) {
                header("Location:" . SITEURL . "admin/index.php?page_layout=product", true);
                $_SESSION["actionAlert"] = "Update product success";
                $_SESSION["actionType"] = "success";
            } else {
                $_SESSION["actionAlert"] = "Update product fail";
                $_SESSION["actionType"] = "danger";
            }
        } else {
            // update when not have image

            $sql = "UPDATE product  SET name_product = '$nameProduct', price = '$price', color = '$color' WHERE id_product=$id ";

            $sqlSpecificProduct = "UPDATE specific_product SET long_product = '$long_product', width_product = '$width_product', height = '$height',
            weight = '$weight', engine = '$engine', cubic = '$cubic', max_power = '$max_power', max_torque = '$max_torque', gear = '$gear', wheel_drive = '$wheel_drive',
            speed_up = '$speed_up', max_speed = '$max_speed', fuel_type = '$fuel_type', fuel_consum_normal = '$fuel_consum_normal', fuel_consum_city = '$fuel_consum_city',
            fuel_consum_country_side = '$fuel_consum_country_side' WHERE id_product=$id ";

            $sqlDeleteContract = 'ALTER TABLE specific_product
            DROP FOREIGN KEY `specific_product_ibfk_1`';

            $sqlAddContract = 'ALTER TABLE specific_product
            ADD CONSTRAINT `specific_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)';

            // mysqli_query($conn, $sqlDeleteContract) or die(mysqli_error($mysqli_query($conn, $sqlDeleteContract)));

            $res =  mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));

            $resQuerySpecificTable =  mysqli_query($conn, $sqlSpecificProduct) or die(mysqli_error($mysqli_query($conn, $sqlSpecificProduct)));


            // mysqli_query($conn, $sqlAddContract) or die(mysqli_error($mysqli_query($conn, $sqlAddContract)));
            if ($res && $resQuerySpecificTable) {
                header("Location:" . SITEURL . "admin/index.php?page_layout=product", true);
                $_SESSION["actionAlert"] = "Update product success";
                $_SESSION["actionType"] = "success";
            } else {
                $_SESSION["actionAlert"] = "Update product fail";
                $_SESSION["actionType"] = "danger";
            }
        }
    }
}
