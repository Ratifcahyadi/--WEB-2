<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- <table class="table table-hover"> -->
    <table class="container table table-striped mt-4">
        <thead>
            <tr class="tr">
                <th class="satu">No</th>
                <th hidden>Nik</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Skill</th>
                <th>Mau Diapain</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sambung = mysqli_connect("localhost", "root", "", "db_crud_pweb2");

            $sql = "SELECT * FROM dosen";
            $query = mysqli_query($sambung, $sql);
            $nomor = 1;

            while ($dosen = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $nomor . "</td>";
                echo "<td hidden>" . $dosen['nik_dos'] . "</td>";
                echo "<td>" . $dosen['nm_dos'] . "</td>";
                echo "<td>" . $dosen['almt_dos'] . "</td>";
                echo "<td>" . $dosen['jkl_dos'] . "</td>";
                echo "<td>" . $dosen['skl_dos'] . "</td>";
                echo "<td>";
                echo "<a href='formUpdate.php?nik=" . $dosen['nik_dos'] . "'>Edit</a> | ";
                echo "<a href='deleteController.php?nik=" . $dosen['nik_dos'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
                $nomor++;
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>