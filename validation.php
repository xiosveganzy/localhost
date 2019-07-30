<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'tabel');

$user = $_POST['username'];
$pass = $_POST['password'];
?>
