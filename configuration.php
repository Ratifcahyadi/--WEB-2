<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_crud_pweb2";


$sambung = mysqli_connect($server, $user, $password, $nama_database);
if(!$sambung) {
    die("Ada masalah koneksi ke database: " . mysqli_connect_error());
}
?>