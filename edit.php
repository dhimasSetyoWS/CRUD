<?php

include("connection.php");


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    // update data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name', nim='$nim', jurusan='$jurusan' WHERE id='$id'");

    // Menuju ke halaman utama lagi
    header("Location: index.php");
}
?>


<?php
// get id from requested url
$id = $_GET['id'];
$update = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");


while ($user_data = mysqli_fetch_array($update)) {
    $name = $user_data['name'];
    $nim = $user_data['nim'];
    $jurusan = $user_data['jurusan'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    h2 {
        margin-left: 25px;
    }

    table {
        margin-left: 25px;
    }

    a {
        margin: 25px;
    }
</style>

<body>
    <a href="index.php" class="btn btn-primary">Go To Home</a>
    <br>

    <h2>Edit Data</h2>

    <form action="edit.php" method="post">
        <table class="table">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $nim ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $jurusan ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
                <td><input class="btn btn-success" type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>