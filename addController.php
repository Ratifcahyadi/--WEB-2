<?php
include("configuration.php");

// cek tombol daftar

if(isset($_POST['daftar'])) {
    // ambil data dari form
    $nik = $_POST['nik'];
    $nm = $_POST['nama_dosen'];
    $alt = $_POST['alamat_dosen'];
    $jk = $_POST['jenis_kelamin'];
    $sk = $_POST['skill_dosen'];

    // buat query option 1
    $sql = "INSERT INTO dosen (nik_dos, nm_dos, almt_dos, jkl_dos, skl_dos) VALUES ('$nik', '$nm', '$alt', '$jk', '$sk')";
    $query = mysqli_query($sambung, $sql);

    // buat query option 2
    // $query = mysqli_query($sambung, "INSERT INTO users (nik_dos, nm_dos, almt_dos, skl_dos) VALUE ('$nik', '$nm', '$alt', '$jk', '$sk')");

    if($query) {
        // kalau berhasil menampilkan status=sukses
        echo 'Insert sukses';
    } else {
        // kalau berhasil menampilkan status=gagal
        echo 'Insert gagal';
    }
} else {
    die("Akses dilarang...");
}

?>