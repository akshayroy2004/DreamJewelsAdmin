<?php

include "connection.php";

$responce = array();


$old = $_POST["old"];

$new = $_POST["new"];
$id = $_POST["uid"];

// $retype=$_POST["conform"];

$result = mysqli_query($conn, "select * from user where user_id='$id' and password='$old'");
if ($row = mysqli_num_rows($result)) {
    $result = mysqli_query($conn, "update user set password='$new' where user_id='$id'");
    if ($result) {
        $responce["status"] = "true";
        $responce["message"] = "User ChangePassword Successfully!";
    } else {
        $responce["status"] = "false";
        $responce["message"] = "Error";
    }
}
echo json_encode($responce);
