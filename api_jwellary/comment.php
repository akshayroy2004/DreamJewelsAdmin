<?php
include"connection.php";
$responce=array();
$aid=$_POST["articles_id"];
$uid=$_POST["user_id"];
$cmt=$_POST["comment"];

$result = mysqli_query($conn,"insert into tbl_comments (articles_id,user_id,comment) values ('$aid','$uid','$cmt')") or die(mysqli_error($conn));
if($result==true)
{
    $responce["status"] = "true";
    $responce["message"] = "User Comment Successfuly!";
}
else
{
    $responce["status"] = "false";
    $responce["status"] = "Error";

}


echo json_encode($responce);


?>