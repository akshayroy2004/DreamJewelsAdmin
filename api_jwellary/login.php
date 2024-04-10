<?php

include "connection.php";

$responce =array();
$email=$_POST["email"];
$passwd=$_POST["password"];

$result = mysqli_query($conn,"select * from user where (email='$email' and password='$passwd') AND (isverify='yes' and isblock='no')") or die(mysqli_error($conn));
if(mysqli_num_rows($result)<=0)
{
    $responce["status"] = "false";
    $responce["message"] = "User Not Found!";
}
else
{
    $responce["status"] = "true";
    $responce["message"] = "User Login Successfuly!";   
    if($row = mysqli_fetch_assoc($result))
    {
        $responce["data"] = $row;
       
    }
    

}


echo json_encode($responce);
?>