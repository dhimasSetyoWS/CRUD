<?php

include_once("connection.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

header("Location: index.php");
