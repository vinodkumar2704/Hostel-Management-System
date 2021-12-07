<?php

if (isset($_POST['login-submit'])) {

  require 'config.inc.php';

  $username = $_POST['username'];
  $password = $_POST['pwd'];

  if (empty($username) || empty($password)) {
    header("Location: ../login-hostel_manager.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM hostel_Manager WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwd =  $row['password'];
      if($password != $row['password']){
        header("Location: ../login-hostel_manager.php?error=wrongpwd");
        exit();
      }
      else if($password == $row['password']) {

        //session_start();
        $_SESSION['hostel_man_id'] = $row['hm_id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['mob_no'] = $row['phone_no'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['hostel_id'] = $row['h_id'];
        $_SESSION['isadmin'] = $row['isadmin'];
        $_SESSION['PSWD'] = $row['password'];

        //Just for checking if session variables are working properly
        if(isset($_SESSION['username'])){
          echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        //echo $_SESSION['lname'];
        if($_SESSION['isadmin']==0){
          header("Location: ../home_manager.php?login=success");
        }
        else {
          header("Location: ../admin/admin_home.php?login=success");
        }
        //exit();
      }
      else {
        header("Location: ../login-hostel_manager.php?error=strangeerr");
        exit();
      }
    }
    else{
      header("Location: ../login-hostel_manager.php?error=nouser");
      exit();
    }
  }

}
else {
  header("Location: ../login-hostel_manager.php");
  exit();
}
