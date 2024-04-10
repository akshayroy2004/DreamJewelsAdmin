<?php 

include "connection.php";

$responce = array();

$id = $_POST["user_id"];
$result = mysqli_query($conn, "SELECT * FROM tbl_cart AS t LEFT JOIN jewellery AS j ON t.jewellery_id = j.jewellery_id WHERE user_id='$id'");
    
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $responce["status"] = "true";
        $responce["message"] = "Found!";
        $responce["data"][] = $row;
    }
}
else
{
    $responce["status"] = "false";
    $responce["message"] = "Found!";
}


echo json_encode($responce);


?>