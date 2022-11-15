<?php 
if(isset($_GET["action"]) && isset($_GET["id"])){
    $idAdmin = $_GET["id"];
    $sql = "DELETE FROM admin WHERE id=$idAdmin";
    echo $sql;
    $res = mysqli_query($conn, $sql);
    if($res){
        header("Location:" . SITEURL . "admin/index.php?page_layout=admin");
        $_SESSION["actionAlert"] = "Delete admin success";
    }else{
        $_SESSION["actionAlert"] = "Delete admin fail";
    }
}
