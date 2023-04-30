<?php
    include "../db.php";
    SESSION_START();
    
    if(!isset($_COOKIE['logged'])){
        
        header('location: ../admin_login.php');
    }

    if(isset($_REQUEST['id'])){
        $teacher_id = intval($_REQUEST['id']);

        $del_sql = "DELETE FROM teachers WHERE teacher_id = '$teacher_id'";
        $records = mysqli_query($con, $del_sql);

        echo ("Successfully Deleted a teachers!");
    }

   // header("Location: a_manage_teachers.php");
?>