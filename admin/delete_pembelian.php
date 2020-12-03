<?php
require '../db_login/db_login.php';
$id_transaksi = $_GET['id_transaksi'];

$query = "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('Data Sudah dihapus slur'); window.location='pembelian.php';</script>";
} else {
    echo "<script>window.location='pembelian.php';</script>";
}