<?php
require '../db_login/db_login.php';
if (isset($_POST['tambah']));

$user = $_GET['user'];
$id_pembeli = $_POST['id_pembeli'];
$nama_obat = $_POST['nama_obat'];
$kode_obat = $_POST['kode_obat'];
$fungsi = $_POST['fungsi'];
$harga = $_POST['harga'];

$query = "INSERT INTO transaksi values ('$id_pembeli','$nama_obat','$kode_obat','1','$fungsi','$harga')";
$result = $mysqli->query($query);
if ($result) {
    echo "<script>window.alert('DATA BERHASIL DIMASUKKAN'); window.location='pembelian.php'</script>";
} else {
    echo "<script>window.alert('MOHON MAAF ID SUDAH ADA'); window.location='input.php'</script>";
}
