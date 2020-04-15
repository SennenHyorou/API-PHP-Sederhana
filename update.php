<?php
require_once('connection.php');

$npm = htmlspecialchars($_POST["npm"]);
$nama = htmlspecialchars($_POST["nama"]);
$prodi = htmlspecialchars($_POST["prodi"]);
$fakultas  = htmlspecialchars($_POST["fakultas"]);

$getdata = mysqli_query($koneksi, "SELECT * FROM tbmahasiswa WHERE npm='$npm'");
$rows = mysqli_num_rows($getdata);

$update = "UPDATE tbmahasiswa SET nama='$nama', prodi='$prodi', fakultas='$fakultas' WHERE npm='$npm'";
$result = mysqli_query($koneksi, $update);

$response = array();

if ($rows > 0) {
    if ($result) {
        $response['code'] = 1;
        $response['message'] = "Updated success";
    } else {
        $response['code'] = 0;
        $response['message'] = "Updated failed";
    }
} else {
    $response['code'] = 0;
    $response['message'] = "Updated failed, No Data Selected";
}
echo json_encode($response);
