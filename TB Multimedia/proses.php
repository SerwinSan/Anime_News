<?php
//deklasrasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "animeweb_db";    

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['comment'];
$submit = $_POST['submit'];

$query = "INSERT INTO komentar VALUES('$nama','$email','$komentar','$submit')";

mysqli_query($connection, $query);

header("Location: index.html");
?>