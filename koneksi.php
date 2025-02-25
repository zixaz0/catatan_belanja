<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'catatan_belanja';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>