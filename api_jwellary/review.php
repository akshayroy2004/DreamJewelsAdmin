<?php
include "connection.php";

$response = array();
$uid = $_POST["user_id"];
$jid = $_POST["jewellery_id"];
$rt = $_POST["review_text"];
$rt1 = $_POST["rating"];

$result = mysqli_query($conn, "insert into tbl_review (user_id,jewellery_id,review_text,rating) values ('$uid','$jid','$rt','$rt1')") or die(mysqli_error($conn));
if ($result) {
    $review_id = mysqli_insert_id($conn); // Get the review ID
    $response["status"] = "true";
    $response["review_id"] = $review_id; // Pass the review ID in the response
    $response["message"] = "User Review Successfully!";
} else {
    $response["status"] = "false";
    $response["message"] = "Error";
}

echo json_encode($response);
?>
