<?php 
include 'connection.php';

$responce = array();

$id = $_POST["id"];
$profile = $_POST["profile"];

$image = "none";

$data = base64_decode($profile);
$image = rand(1111,9999) . ".png";
$file_path = "uploads/" . $image;
echo $file_path;
if (file_put_contents($file_path, $data)) {
    $result = mysqli_query($conn, "update tbl_review set img='$image' where review_id='$id'") or die(mysqli_error($conn));

    if ($result) {
        echo $image;
    } else {
        echo "no";
    }
} else {
    echo "error";
}
?>
