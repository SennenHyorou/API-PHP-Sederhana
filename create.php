<?php
include_once("connection.php");

$npm = htmlspecialchars($_POST["npm"]);
$nama = htmlspecialchars($_POST["nama"]);
$prodi = htmlspecialchars($_POST["prodi"]);
$fakultas  = htmlspecialchars($_POST["fakultas"]);

$query = "INSERT INTO tbmahasiswa(npm,nama,prodi,fakultas) VALUES ('$npm','$nama','$prodi','$fakultas')";
$result = mysqli_query($koneksi, $query);

$response = array();

if ($result) {
    $response['code'] = 1;
    $response['message'] = "Success! Data Inserted";
} else {
    $response['code'] = 2;
    $response['message'] = "Failed! Data not inserted";
}
echo json_encode($response);
