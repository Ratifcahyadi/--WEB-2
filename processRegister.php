<?php
    include "configuration.php";

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO user (name, username, password) VALUES ('$nama', '$username', '$password')";
    $query = mysqli_query($sambung, $sql);

    if($query) {
        echo "Berhasil";
        exit;
    } else {
        echo "Gagal";
        exit;
    }























    // $query = mysqli_query($connect, "insert into user (username, password) values ('$username, $password')");
    // $cek = mysqli_num_rows($query);

    // if ($cek>0) {
    //     #code...
    //     header("location:dashboard.php");
    // } else {
    //     header("location: formRegister.php?app=gagal");
    // }

?>