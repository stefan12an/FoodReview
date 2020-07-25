<?php
include_once 'connection.php';
$user = $_POST['user'];
$reteta = $_POST['reteta'];
$sql = "INSERT INTO users(username,reteta) VALUES ('$user','$reteta');";
mysqli_query($conn, $sql);
header("Location: /bin/Pagini/Home%20Page/index.html?signup=success");
?>