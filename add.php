<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ADD</title>
</head>

<style>
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    table {
        margin-left: 25px;
    }

    a {
        margin: 25px;
    }

    .notif {
        margin-left: 25px;
    }
</style>

<body>
    <a href="index.php" class="btn btn-primary">Go To Home</a>
    <br>

    <form action="add.php" method="post">
        <table class="table">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $nim = $_POST["nim"];
    $jurusan = $_POST["jurusan"];

    include_once("connection.php");

    $result = mysqli_query($mysqli, "INSERT INTO users(name,nim,jurusan) VALUES('$name', '$nim', '$jurusan')");

    echo '<div class="notif">User added succesfully. <a href="index.php">View Users</a></div>';
}

?>