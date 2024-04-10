<?php
include"connection.php";

$responce=array();
$id = $_POST["order_id"];
$result=mysqli_query($conn,"select * from tbl_order as o left join tbl_city as t on o.city_id=t.city_id left join tbl_offer as ot on o.offer_id=ot.offer_id where t_number='$id'");
if($result)
{
    while($row = mysqli_fetch_assoc($result)){
        $responce["status"] = "true";
        $responce["message"] = "Found!";
        $responce["data"][] = $row;

        $sql = mysqli_query($conn,"select * from tbl_details as d left join tbl_order as o on d.order_id = o.order_id left join jewellery as j on j.jewellery_id=d.jewellery_id and d.order_id='".$row["order_id"]."' where o.t_number='".$row["t_number"]."'");
        while($r = mysqli_fetch_assoc($sql))
        {
            $responce["items"][] = $r;
        }
    }
}
else{
    $responce["status"] = "false";
    $responce["message"] = "Found!";
}
echo json_encode($responce);
?>