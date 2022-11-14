<?php
include "configuration.php";

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) && !empty($password)) {
    $query = mysqli_query($sambung, "select * from user where username='$username' and password='$password'");
    $result = mysqli_num_rows($query);

    if ($result > 0) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = md5($_POST['password']);
        // $_SESSION['status'] = "login";
            echo "Login Berhasil";
    } else {
        $_SESSION['error'] = "Username atau password Anda salah";
            echo "Login Gagal";
    }
} else {
    $_SESSION['error'] = "Username atau pasword tidak boleh kosong";
        echo "error";
}

?>