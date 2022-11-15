<?php

if (isset($_POST["addUser"])) {
    $userName = $_POST["userName"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    echo $userName . $phone .$address;
    $sql = "INSERT INTO user (user_name, phone, address) VALUES ('$userName', '$phone', '$address')";
    $res =  mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));
    // echo SITEURL."admin/index.php?page_layout=admin";
    if ($res) {
        header("Location:" . SITEURL . "admin/index.php?page_layout=user");
        $_SESSION["actionAlert"] = "Add user success";
        $_SESSION["actionType"] = "success";
        // sleep(3);
        // unset( $_SESSION["actionAlert"]);
    } else {
        $_SESSION["actionAlert"] = "Add user fail";
        $_SESSION["actionType"] = "danger";
    }
}

if (isset($_GET["action"]) && isset($_GET["id"]) && $_GET["action"] == 'delete' && $_GET["page_layout"] == 'user') {
    $idUser = $_GET["id"];
    $sql = "DELETE FROM user WHERE id_user=$idUser";
    $res = mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));
    if ($res) {
        $_SESSION["actionAlert"] = "Delete user success";
        $_SESSION["actionType"] = "success";
        // header("Location:" . SITEURL . "user/index.php?page_layout=user");

    } else {
        $_SESSION["actionAlert"] = "Delete user fail";
        $_SESSION["actionType"] = "danger";
    }
}

if (isset($_POST["updateUser"])) {
    $userName = $_POST["userName"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $id = $_GET["id"];
    $sql = "UPDATE user
    SET user_name = '$userName', phone = '$phone', address = '$address'
    WHERE id_user = $id";
    $res =  mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));
    if ($res) {
        header("Location:" . SITEURL . "admin/index.php?page_layout=user", true);
        $_SESSION["actionAlert"] = "Update user success";
        $_SESSION["actionType"] = "success";
        // sleep(3);
        // unset( $_SESSION["actionAlert"]);
    } else {
        $_SESSION["actionAlert"] = "Update user fail";
        $_SESSION["actionType"] = "danger";
    }
}
