<?php

include("configuration.php");
//require_once("../auth.php");
// include ("../load_header_dosen.php");

// if (!isset($_POST['nik'])) {
// // kalau tidak ada nik di query string
// header('Location: ../view/dosen.php');
//     echo "pergi ke form update";
// }


//deklarasikan variabel $nik dari nik

$id = $_GET['nik'];
// buat query untuk ambil data dari database
$sql = mysqli_query($sambung, "SELECT * FROM dosen WHERE nik_dos=$id");
// $query = mysqli_query($sambung, $sql);
$dosen = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="content container mt-5">
        <header>
            <h3 class="d-flex justify-content-center">Form Update Data</h3>
        </header>
        <form action="updateController.php" method="POST">
            <fieldset>
                <!--  <p> hidden="true" -->
                <p hidden="true">
                    <label for="nik">NIK</label>
                    <input type="text" name="nik" placeholder="NIK" class="form-control" value="<?php echo $dosen['nik_dos'] ?>" />
                </p>
                <p>
                    <label for="nama_dosen">Nama</label>
                    <input type="text" name="nama_dosen" placeholder="Nama Lengkap" class="form-control" value="<?php echo $dosen['nm_dos'] ?>" />
                </p>
                <p>
                    <label for="alamat_dosen">Alamat</label>
                    <textarea name="alamat_dosen" class="form-control"> <?php echo $dosen['almt_dos'] ?></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <?php $jk = $dosen['jkl_dos']; ?>
                    <label><input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                    <label><input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
                </p>
                <p>
                    <label for="skill_dosen">Skill </label>
                    <?php $skill = $dosen['skl_dos'];?>
                    <select class="form-select" name="skill_dosen">
                        <option <?php echo ($skill == 'Nyuntik Pasta Prosesor') ? "selected" : "" ?>>Nyuntik</option>
                        <option <?php echo ($skill == 'Ngerawat Virus') ? "selected" : "" ?>>Ngerawat</option>
                        <option <?php echo ($skill == 'Operasi Casing') ? "selected" : "" ?>>Operasi</option>
                    </select>
                </p>
                <p>
                    <input type="submit" value="Save" class="btn btn-primary" name="edit" />
                </p>
            </fieldset>
        </form>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

