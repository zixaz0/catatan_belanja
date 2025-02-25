<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = $_POST['item'];
    $conn->query("INSERT INTO belanja (item) VALUES ('$item')");
    header("Location: index.php");
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $conn->query("DELETE FROM belanja WHERE id=$id");
    header("Location: index.php");
}

if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $conn->query("UPDATE belanja SET status='dibeli' WHERE id=$id");
    header("Location: index.php");
}
?>