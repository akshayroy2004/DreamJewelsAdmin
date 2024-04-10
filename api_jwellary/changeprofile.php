<?php
include "connection.php";

$responce = array();
$username = $_POST["username"];
$email = $_POST["email"];
$contact=$_POST["contact"];
$id = $_POST["uid"];


    $result = mysqli_query($conn,"update user set name='$username',email='$email',contact='$contact' where user_id='$id'");
    if($result)
{
    $responce["status"] = "true";
    $responce["message"] = "User Register Successfuly!";
}
else
{
    $responce["status"] = "false";
    $responce["status"] = "Error";

}


echo json_encode($responce);



?>