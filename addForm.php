<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="addController.php" method="POST" class="container mt-5">
        <table class="table table-striped">
            <fieldset>
                <tr>
                    <td class="kecilin"><label for="nik">NIK</label></td>
                    <td> <input class="form-control" type="text" name="nik" placeholder="Masukan NIK" /></td>
                    <!-- <td rowspan="5"><img src="../bootstrap/images/image-not.png" class="dosenwanita" alt="Firman Asharudin"> </td> -->
                </tr>
                <tr>
                    <td class="kecilin"><label for="nama_dosen">Nama Dosen</label></td>
                    <td class="td"> <input class="form-control" type="text" name="nama_dosen" placeholder="Nama lengkap" /></td>
                </tr>
                <tr>
                    <td class="kecilin"><label for="alamat_dosen">Alamat Dosen</label></td>
                    <td> <textarea class="form-control" name="alamat_dosen"></textarea></td>
                </tr>
                <tr>
                    <td class="kecilin"><label for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td colspan="2">
                        <label><input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
                        <label><input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td class="kecilin"><label for="skill_dosen">Skill Dosen</label></td>
                    <td class="td"> <select class="form-select" name="skill_dosen">
                            <option>Nyuntik Pasta Prosesor</option>
                            <option>Ngerawat Virus</option>
                            <option>Operasi Casing</option>
                        </select></td>
                </tr>
                <tr>
                    <!--bikin tombol daftar-->
                    <td colspan="2">
                        <input style="background-color: #DDA0DD;" class="btn btn-sm" type="submit" value="Tambah" name="daftar" />
                        <input style="background-color: #DDA0DD;" class="btn btn-sm" type="button" value="Gak Jadi" onclick="window.location.href='../view/dosen.php'" />
                    </td>
                    <!--bikin tombol kembali-->
                    <td>
                        
                    </td>
                </tr>
            </fieldset>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>