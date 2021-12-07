<?php
  session_start();
  //depends on server and database you use
  $servername = "localhost"; 
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "hostel_management";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
