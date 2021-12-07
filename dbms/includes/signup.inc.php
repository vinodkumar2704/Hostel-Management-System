<?php

if (isset($_POST['signup-submit'])) {

  require 'config.inc.php';

  $roll = $_POST['student_roll_no'];
  $fname = $_POST['student_fname'];
  $lname = $_POST['student_lname'];
  $mobile = $_POST['mobile_no'];
  $dept = $_POST['department'];
  $year = $_POST['year_of_study'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $cnfpassword = $_POST['confirmpwd'];


  if(!preg_match("/^[a-zA-Z0-9]*$/",$roll)){
    header("Location: ../signup.php?error=invalidroll");
    exit();
  }
  else if($password !== $cnfpassword){
    header("Location: ../signup.php?error=passwordcheck");
    exit();
  }
  else {

    $sql = "SELECT s_id FROM student WHERE s_id=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $roll);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../signup.php?error=userexists");
        exit();
      }
      else {
        $sql = "INSERT INTO student (s_id, fname, lname, department, year, phone_no,email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../signup.php?error=sqlerrorr");
          exit();
        }
        else {

          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);//to secure password

          mysqli_stmt_bind_param($stmt, "ssssssss",$roll, $fname, $lname, $dept, $year, $mobile,$email, $hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../index.php?signup=success");
          exit();
        }
      }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  header("Location: ../signup.php");
  exit();
}
