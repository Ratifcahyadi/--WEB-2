<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="processLogin.php" method="POST" class="container  mt-3">
        <h1 class="d-flex justify-content-center">Login</h1>
        <div class="  mb-3">
            <label for="exampleInputuser" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputuser">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>


<?php 
if(isset($_GET['pesan'])) {
    if($_GET['pesan'] == "gagal") {
        echo "Login gagal! username dan password Anda salah";
    } elseif($_GET['pesan'] == "logout" ) {
        echo "Anda telah berhasil logout";
    } elseif ($_GET['pesan'] == "beluum_login" ) {
        echo "Anda harus login untuk mengakses halaman admin";
    }
}
?>
</html>