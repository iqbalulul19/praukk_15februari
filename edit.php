<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:tampil.php");
}

    $kode=$_GET['id'];
    $sql = ("SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd = tb_dvd.id_dvd WHERE tb_penyewa.id_penyewa = '$kode'");
    $query = mysqli_query($db, $sql);
    $sewa = mysqli_fetch_assoc($query);
?>

<html>
    <head>
    </head>
    <body>
        <h1>Edit</h1>
        <form action="proses_edit.php" method="POST">

            <fieldset>
                <input type="hidden" name="id_penyewa" value="<?php echo $sewa['id_penyewa']?>"/>
            <p>
                <label for="nama_penyewa">Nama penyewa : </label>
                <input type="text" name="nama_penyewa" value="<?php echo $sewa['nama_penyewa']?>"/>
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" value="<?php echo $sewa['alamat']?>"/>
            </p>
            <p>
                <label for="genre_film">Genre film : </label>
                <input type="text" name="genre_film" value="<?php echo $sewa['genre_film']?>"/>
            </p>
            <p>
                <label for="judul_film">Judul film : </label>
                <input type="text" name="judul_film" value="<?php echo $sewa['judul_film']?>"/>
            </p>
            <p>
                <label for="tahun_film">Tahun film : </label>
                <input type="number" name="tahun_film" value="<?php echo $sewa['tahun_film']?>"/>
            </p>
            <p>
                <label for="tanggal_sewa">Tanggal sewa : </label>
                <input type="date" name="tanggal_sewa" value="<?php echo $sewa['tanggal_sewa']?>"/>
            </p>
            <p>
                <label for="tanggal_kembali">Tanggal kembali : </label>
                <input type="date" name="tanggal_kembali" value="<?php echo $sewa['tanggal_kembali']?>"/>
            </p>
            <p>
                <label for="harga">Harga : </label>
                <input type="number" name="harga" value="<?php echo $sewa['harga']?>"/>
            </p>
            <p>
                <input type="submit" value="Simpan" name="edit">
            </p>
            </fieldset>
        </form>
    </body>
</html>
