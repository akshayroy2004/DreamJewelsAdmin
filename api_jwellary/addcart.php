<?php 

include "connection.php";

$responce = array();

$userid = $_POST["user_id"];
$jewel = $_POST["jewellery_id"];
$qty = $_POST["qty"];
$price = $_POST["price"];


$result = mysqli_query($conn,"insert into tbl_cart (user_id,jewellery_id,qty,price) values ('$userid','$jewel','$qty','$price')") or die(mysqli_error($conn));



if($result==true)
{
    $responce["status"] = "true";
    $responce["message"] = "User AddCart Successfuly!";
    
}
else
{
    $responce["status"] = "false";
    $responce["status"] = "Error";

}


echo json_encode($responce);


?>