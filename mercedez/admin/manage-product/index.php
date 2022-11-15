<?php
if (isset($_GET["action"])) {
    $action = $_GET["action"];
    // echo $action;
    // if(!$action){
    //     include("./manage-admin.php");
    //     return; 
    // }
    switch ($action) {
        case "add": {
                // header("location:trangchu.php");
                include("./manage-product/add-product.php");
                break;
            }
            // case "delete":{
            //     include("./manage-product/delete-product.php");
            //     break;
            // }
        case "details": {
                // header("location:lienhe.php");
                include("./manage-product/details.php");
                break;
            }
        case "update": {
                // header("location:lienhe.php");
                include("./manage-product/update.php");
                break;
            }
        default: {
                include("./manage-product/manage-product.php");
                break;
            }
    }
} else {
    include("./manage-product/manage-product.php");
}

