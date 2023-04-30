<?php

SESSION_START();

include "db.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $student_email = $_POST['student_email'];
  $student_password = md5($_POST['student_password']);
 

 $selected_db = mysqli_select_db ($con, 'flutter_api');

  if(!$selected_db){

    echo "No Database Selected";

  }




$table_query = "SELECT * FROM students WHERE student_email = '$student_email' AND student_password = '$student_password'";

$table_result = mysqli_query($con,$table_query);
$row = mysqli_fetch_array($table_result,MYSQLI_ASSOC);
$count = mysqli_num_rows ($table_result);


if ($count == 1){
    $last = 1200 + time();
    $_SESSION['email'] = $student_email;    
    setcookie(logged, date("F jS - g:i a"), $last);
    //echo "Successful";
    header('location:students/student_profile.php');

}else{

  echo "Incorrect Username or Password";

}

}

$con->close();

?>












