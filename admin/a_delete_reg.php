<?php
    include "../db.php";
    SESSION_START();
    
    if(!isset($_COOKIE['logged'])){
        
        header('location: ../admin_login.php');
    }

    if(isset($_REQUEST['id'])){
        $registral_id = intval($_REQUEST['id']);

        $del_sql = "DELETE FROM registral WHERE registral_id = '$registral_id'";
        $records = mysqli_query($con, $del_sql);

        echo ("Successfully Deleted a Registral!");
    }

?>