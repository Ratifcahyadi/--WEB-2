<?php
include('configuration.php');

$nik = $_GET['nik'];

$sql = "DELETE FROM dosen WHERE nik_dos=$nik";
$query = mysqli_query($sambung, $sql);

if($query) {
    echo ('location: tampilkanData.php');
} else {
    die("gagal menghapus...");
}
?>