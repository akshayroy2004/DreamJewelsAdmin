<?php 

include "connection.php";

$responce = array();

$name1 = $_POST["name"];
$email1 = $_POST["email"];
$contact1 = $_POST["contact"];
$feedback1 = $_POST["feedback"];


$result = mysqli_query($conn,"insert into tbl_feedback (name,email,contact,feedback) values ('$name1','$email1','$contact1','$feedback1')") or die(mysqli_error($conn));

if($result==true)
{
    $responce["status"] = "true";
    $responce["message"] = "User Feedback Successfuly!";
}
else
{
    $responce["status"] = "false";
    $responce["status"] = "Error";

}


echo json_encode($responce);


?>