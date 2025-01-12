<?php
include("connection.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
    <title>CRUD</title>

</head>

<body>
    <table class="table">
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Jurusan</th>
        </tr>
        <?php
        $adadata = false;
        while ($userData = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $userData['name'] . "</td>";
            echo "<td>" . $userData['nim'] . "</td>";
            echo "<td>" . $userData['jurusan'] . "</td>";
            echo "<td><a href='edit.php?id=$userData[id]'>Edit</a> | <a class='text-danger' href='delete.php?id=$userData[id]'>Delete</a></td>";
            echo "</tr>";
            $adadata = true;
        }
        if (!$adadata) {
            echo "<tr>";
            echo "<td>" . "<strong>Belum ada data, silahkan tambahkan data</strong>" . "</td>";
            echo "<td>" . "<strong>-</strong>" . "</td>";
            echo "<td>" . "<strong>-</strong>" . "</td>";
            echo "</tr>";
        }
        ?>



    </table>
    <a href="add.php" class="btn btn-primary">Add Data</a>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>