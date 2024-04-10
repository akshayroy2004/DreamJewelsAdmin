<?php 

include "connection.php";

$responce = array();

$id = $_POST["cart_id"];

$res = mysqli_query($conn,"select * from tbl_cart where cart_id='$id'");
if($res)
{
    
    $result = mysqli_query($conn,"delete from tbl_cart where cart_id='$id'");
    while($row = mysqli_fetch_assoc($res))
    {
        // $responce["demo"] = "true";
        // $responce["message"] = "Found!";
        $responce["data"][] = $row;
    }
    $responce["status"] = "true";
    $responce["message"] = "Data Delete!";
    
}
else
{
    $responce["status"] = "false";
    $responce["message"] = "Not Found!";
}


echo json_encode($responce);


?>