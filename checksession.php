<?php
session_start();
if(!isset($_SESSION["islogin"]))
{
echo "yes";  echo "<script>window.location='signin.php'</script>";
}


include 'connection.php';
?>