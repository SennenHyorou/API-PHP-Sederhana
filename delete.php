<?php
include_once('connection.php');

$npm = htmlspecialchars($_POST["npm"]);
$getdata = mysqli_query($koneksi, "SELECT * FROM tbmahasiswa WHERE npm=  '$npm'");
$rows = mysqli_num_rows($getdata);

$delete = "DELETE FROM tbmahasiswa WHERE npm = '$npm'";
$result = mysqli_query($koneksi, $delete);

$response = array();
if ($rows > 0) {
    if ($result) {
        $response['code'] = 1;
        $response['message'] = "Deleted Success";
    } else {
        $response['code'] = 0;
        $response['message'] = "Failed to delete";
    }
} else {
    $response['code'] = 0;
    $response['message'] = "Failed to delete, data not found";
}

echo json_encode($response);
