<?php
include "koneksi.php";
session_start();

$fotoid=$_POST['fotoid'];
$isikomentar=$_POST['isikomentar'];
$tanggalkomentar=date("Y-m-d");
$userid=$_SESSION['userid'];

// Memastikan bahwa komentar hanya terkait dengan satu foto
$sql=mysqli_query($conn,"INSERT INTO komentarfoto (fotoid, userid, isikomentar, tanggalkomentar) VALUES ('$fotoid', '$userid', '$isikomentar', '$tanggalkomentar')");

header("location:komentar.php?fotoid=".$fotoid);
?>