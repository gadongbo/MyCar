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
                include("./manage-user/add-user.php");
                break;
            }
            // case "delete":{
            //     include("./manage-user/delete-user.php");
            //     break;
            // }
        case "update": {
                // header("location:lienhe.php");
                include("./manage-user/update-user.php");
                break;
            }
        default: {
                include("./manage-user/manage-user.php");
                break;
            }
    }
} else {
    include("./manage-user/manage-user.php");
}

?>

