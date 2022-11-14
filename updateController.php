<?php
// include("configuration.php");

// if (isset($_POST['edit'])) {
//     // cek button simpan
//     $nik = $_POST['nik'];
//     $nm = $_POST['nama_dos'];
//     $alt = $_POST['alamat_dosen'];
//     $jk = $_POST['jenis_kelamin'];
//     $sk = $_POST['skill_dosen'];

//     $sql = "UPDATE dosen SET nik_dos='$nik', nm_dos='$nm', almt_dos='$alt', jkl_dos=$'jk', skl_dos='$sk' WHERE nik_dos='$nik'";
//     $query = mysqli_query($sambung, $sql);
//     // apakah query update
//     if ($query) {
//         // kalau berhasil alihkan ke halaman view_dosen.php
//         echo "Update Berhasil";
//     } else {
//         // kalau gagal tampilkan pesan
//         die('Gagal menyimpan perubahan');
//     }
// } else {
//     die("Akses dilarang...");
// }
?>
<?php
include("configuration.php");
if (isset($_POST['edit'])) {
    $nik = $_POST['nik'];
    $nm = $_POST['nama_dosen'];
    $alt = $_POST['alamat_dosen'];
    $jk = $_POST['jenis_kelamin'];
    $sk = $_POST['skill_dosen'];

    $sql = "UPDATE dosen SET nik_dos='$nik', nm_dos='$nm', almt_dos='$alt', jkl_dos='$jk', skl_dos='$sk' WHERE nik_dos='$nik'";
    $query = mysqli_query($sambung, $sql);

    if ($query) {
        // header('Location: ../view/dosen.php');
        echo "Update Berhasil";
    } else {
        // kalau gagal menampilkan status=gagal
        header('Gagal menyimpan perubahan...');
    }
} else {
    die("Akses dilarang...");
}
?>