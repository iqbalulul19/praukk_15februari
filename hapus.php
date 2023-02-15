<?php
include("koneksi.php");
$kode = $_GET['id'];

$sql = "DELETE FROM tb_dvd WHERE id_penyewa = $kode";
$query = mysqli_query($db, $sql);

$sql = "DELETE FROM tb_penyewa WHERE id_penyewa = $kode";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:tampil.php?status:sukses");
}else{
    die("akses dilarang");
}
?>