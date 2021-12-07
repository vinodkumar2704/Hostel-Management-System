<?php

  require 'includes/config.inc.php';
  

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from message where msg_id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("Location: message_user.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>