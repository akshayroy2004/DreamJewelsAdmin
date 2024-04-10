<?php

include"connection.php";

$responce=array();

$id=$_POST["user_id"];

$result=mysqli_query($conn,"select * from tbl_review as r left join jewellery as j on r.jewellery_id=j.jewellery_id where user_id='$id' and isdisplay='yes'");

if($result)
{
    while($row = mysqli_fetch_assoc($result)){
        $responce["status"] = "true";
        $responce["message"] = "Found!";
        $responce["data"][] = $row;
    }
}
else{
    $responce["status"] = "false";
    $responce["message"] = "Found!";
}
echo json_encode($responce);

?>