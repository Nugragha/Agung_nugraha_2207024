<?php
include 'latphp.php';
$nim=$_get['nim'];

$simpandata=("delete from mahasiswa where nim='$nim'");
mysqli_query($koneksi,$simpandata);

if ($simpandata) {header('loction:reportmhs.php?sukses');}
else header('location.reportmhs.php?gagal');
?>