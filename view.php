<?php
include_once('connection.php');
$query = "SELECT * FROM tbmahasiswa";
$result = mysqli_query($koneksi, $query);
$array_data = array();
while ($baris = mysqli_fetch_assoc($result)) {
    $array_data[] = $baris;
}
echo json_encode($array_data);
