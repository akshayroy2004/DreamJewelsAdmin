<?php
include "connection.php";
$responce=array();
$user=$_POST["user_id"];
$pay=$_POST["total_payment"];
$add=$_POST["address"];
$landmark=$_POST["landmark"];
$pin=$_POST["pincode"];
$city=$_POST["city_id"];
$tnum=$_POST["t_number"];
$state=$_POST["status"];
$offer=$_POST["offer_id"];
$discount=$_POST["discount"];


$result=mysqli_query($conn,"insert into tbl_order(user_id,total_payment,address,landmark,pincode,city_id,t_number,status,offer_id,discount) values('$user','$pay','$add','$landmark','$pin','$city','$tnum','$state','$offer','$discount') ") or die (mysqli_error($conn));


$id = mysqli_insert_id($conn);

$sql = mysqli_query($conn,"select * from tbl_cart where user_id='$user'");
while($row=mysqli_fetch_assoc($sql))
{
    mysqli_query($conn,"insert into tbl_details (order_id,jewellery_id,qty) values ('".$id."','".$row["jewellery_id"]."','".$row["qty"]."')");
}
mysqli_query($conn,"delete from tbl_cart where user_id='$user'");



mysqli_query($conn,"delete from tbl_cart where user_id='$user'");

if($result==true)
{
    $responce["status"] = "true";
    $responce["message"] = "Order data  Successfuly!";
}
else
{
    $responce["status"] = "false";
    $responce["status"] = "Error";

}


echo json_encode($responce);
?>