<?php
    include "../db.php";
    SESSION_START();
    
    if(!isset($_COOKIE['logged'])){
        
        header('location: ../admin_login.php');
    }

    if(isset($_REQUEST['id'])){
        $student_id = intval($_REQUEST['id']);

        $del_sql = "DELETE FROM students WHERE id = '$student_id'";
        $records = mysqli_query($con, $del_sql);

        echo ("Successfully Deleted a Student!");
        // $db->query("DELETE FROM student WHERE ID = $id");
    }

   // header("Location: a_manage_teachers.php");
?>