<?php
    include "../db.php";
    SESSION_START();
    
    if(!isset($_COOKIE['logged'])){
        
        header('location: ../admin_login.php');
    }

    if(isset($_REQUEST['id'])){
        $parent_id = intval($_REQUEST['id']);

        $del_sql = "DELETE FROM parent WHERE parent_id = '$parent_id'";
        $records = mysqli_query($con, $del_sql);

        echo ("Successfully Deleted a parents!");
    }

?>