<?php

include "connection.php";
$responce =array();
$id = $_POST["subid"];
$result = mysqli_query($conn,"select * from jewellery as j left join subcategory as sub on j.subcat_id=sub.subcat_id left join type as t on j.type_id=t.type_id left join carat as c on j.carat_id=c.carat_id left join shape as s on j.shape_id=s.shape_id where j.subcat_id = '$id' and j.isactive='yes'");
    
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