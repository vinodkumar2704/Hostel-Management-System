<?php

if (isset($_POST['hm_remove_submit'])) {

  require 'config.inc.php';

  $username = $_POST['hm_uname'];
  $hostel_name = $_POST['hostel_name'];
  $Adminpassword = $_POST['pass'];

  if (empty($username) || empty($hostel_name) || empty($Adminpassword)) {
    header("Location: ../admin/create_hm.php?error=emptyfields");
    exit();
  }
  else if ($username == $_SESSION['username']){
    header("Location: ../admin/create_hm.php?error=cannotremoveadmin");
    exit();
  }
  else {
    $sql = "SELECT * FROM hostel_manager WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if($row = mysqli_fetch_assoc($result)) {

      $sql2 = "SELECT * FROM hostel WHERE hostel_name = '$hostel_name'";
      $result2 = mysqli_query($conn, $sql2);
      if($row2 = mysqli_fetch_assoc($result2)){
        $HNO = $row2['hostel_id'];
        if ($HNO == $row['h_id']) {
          if ($Adminpassword != $_SESSION['PSWD']) {
            header("Location: ../admin/create_hm.php?error=wrongpwd");
            exit();          
          }
          else {
            $sql3 = "DELETE FROM hostel_manager WHERE username = '$username'";
            $result3 = mysqli_query($conn, $sql3);
            if($result3){
              header("Location: ../admin/create_hm.php?DeletionSuccessful");
              exit();           
            }
            else {
              header("Location: ../admin/create_hm.php?error=DeletionFailed");
              exit();            
            }          
          }        
        }
        else {
          header("Location: ../admin/create_hm.php?error=wronghostel");
          exit();        
        }      
      }
      else {
        header("Location: ../admin/create_hm.php?error=nohostel");
        exit();      
      }
    }

  }
}
