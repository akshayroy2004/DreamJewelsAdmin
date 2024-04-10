<?php 

include "connection.php";

$responce = array();

$name = $_POST["name"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$passwd = $_POST["password"];


$result = mysqli_query($conn,"insert into user (name,contact,email,password) values ('$name','$contact','$email','$passwd')") or die(mysqli_error($conn));

if($result==true)
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