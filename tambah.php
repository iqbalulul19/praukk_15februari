<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="proses_tambah.php" method="POST"> 
        <fieldset>
            <p>
                <label for="nama_penyewa">Nama penyewa : </label>
                <input type="text" name="nama_penyewa">
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" rows="S"></textarea>
            </p>
            <p>
                <label for="genre_film">Genre film : </label>
                <input type="text" name="genre_film">
            </p>
            <p>
                <label for="judul_film">Judul film : </label>
                <input type="text" name="judul_film">
            </p>
            <p>
                <label for="tahun_film">Tahun film : </label>
                <input type="number" name="tahun_film">
            </p>
            <p>
                <label for="tanggal_sewa">Tanggal sewa : </label>
                <input type="date" name="tanggal_sewa">
            </p>
            <p>
                <label for="tanggal_kembali">Tanggal kembali : </label>
                <input type="date" name="tanggal_kembali">
            </p>
            <p>
                <label for="harga">Harga : </label>
                <input type="number" name="harga">
            </p>
            <p>
            <input type="submit" value="Tambah" name="tambah">
            </p>
        </fieldset>
    </form>
</body>
</html>