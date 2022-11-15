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
                include("./manage-admin/add-admin.php");
                break;
            }
            // case "delete":{
            //     include("./manage-admin/delete-admin.php");
            //     break;
            // }
        case "update": {
                // header("location:lienhe.php");
                include("./manage-admin/update-admin.php");
                break;
            }
        default: {
                include("./manage-admin/manage-admin.php");
                break;
            }
    }
} else {
    include("./manage-admin/manage-admin.php");
}
