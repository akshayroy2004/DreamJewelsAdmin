<?php
include"connection.php";

$responce=array();
$id = $_POST["user_id"];
$result=mysqli_query($conn,"select * from tbl_comments as c left join tbl_articles as a on c.articles_id=a.articles_id 
 where user_id='$id' and c.isdisplay='yes'");
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