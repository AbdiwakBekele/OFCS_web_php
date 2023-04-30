<?php
    include "../db.php";
    SESSION_START();
    
    if(!isset($_COOKIE['logged'])){
        
        header('location: ../admin_login.php');
    }

    if(isset($_REQUEST['id'])){
        $ho_id = intval($_REQUEST['id']);

        $del_sql = "DELETE FROM ho WHERE ho_id = '$ho_id'";
        $records = mysqli_query($con, $del_sql);

        echo ("Successfully Deleted a ho!");
    }

?>