<?php

if (isset($_POST["addAdmin"])) {
    $fullName = $_POST["fullName"];
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $sql = "INSERT INTO admin (full_name, user_name, password) VALUES ('$fullName', '$userName', '$password')";
    $res =  mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));
    // echo SITEURL."admin/index.php?page_layout=admin";
    if ($res) {
        header("Location:" . SITEURL . "admin/index.php?page_layout=admin", true);
        $_SESSION["actionAlert"] = "Add admin success";
        $_SESSION["actionType"] = "success";
        // sleep(3);
        // unset( $_SESSION["actionAlert"]);
    } else {
        $_SESSION["actionAlert"] = "Add admin fail";
        $_SESSION["actionType"] = "danger";
    }
}

if (isset($_GET["action"]) && isset($_GET["id"]) && $_GET["action"] == 'delete' && $_GET["page_layout"] == 'admin') {
    $idAdmin = $_GET["id"];
    $sql = "DELETE FROM admin WHERE id=$idAdmin";
    $res = mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));
    if ($res) {
        $_SESSION["actionAlert"] = "Delete admin success";
        $_SESSION["actionType"] = "success";
        // header("Location:" . SITEURL . "admin/index.php?page_layout=admin");

    } else {
        $_SESSION["actionAlert"] = "Delete admin fail";
        $_SESSION["actionType"] = "danger";
    }
}

if (isset($_POST["updateAdmin"])) {
    $fullName = $_POST["fullName"];
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $id = $_GET["id"];
    $sql = "UPDATE admin
    SET full_name = '$fullName', user_name = '$userName', password = '$password'
    WHERE id = $id";
    $res =  mysqli_query($conn, $sql) or die(mysqli_error($mysqli_query($conn, $sql)));
    if ($res) {
        header("Location:" . SITEURL . "admin/index.php?page_layout=admin", true);
        $_SESSION["actionAlert"] = "Update admin success";
        $_SESSION["actionType"] = "success";
        // sleep(3);
        // unset( $_SESSION["actionAlert"]);
    } else {
        $_SESSION["actionAlert"] = "Update admin fail";
        $_SESSION["actionType"] = "danger";
    }
}
