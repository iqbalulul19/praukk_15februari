<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <h1>Data Penyewa DVD</h1>
    <a href="tambah.php">Tambah</a>
    <table border="1">
            <tr>
                
                <th>Id</th>
                <th>Nama penyewa</th>
                <th>Alamat</th>
                <th>Genre film</th>
                <th>Judul film</th>
                <th>Tahun film</th>
                <th>Tanggal sewa</th>
                <th>Tanggal kembali</th>
                <th>Harga</th>  
                <th>Aksi</th>  
            </tr>

            <?php
            include("koneksi.php");
            $query = mysqli_query($db, "SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd = tb_dvd.id_dvd");

            while($sewa=mysqli_fetch_array($query)){
            echo"<tr>";
                echo"<td>".$sewa['id_penyewa']."</td>";
                echo"<td>".$sewa['nama_penyewa']."</td>";
                echo"<td>".$sewa['alamat']."</td>";
                echo"<td>".$sewa['genre_film']."</td>";
                echo"<td>".$sewa['judul_film']."</td>";
                echo"<td>".$sewa['tahun_film']."</td>";
                echo"<td>".$sewa['tanggal_sewa']."</td>";
                echo"<td>".$sewa['tanggal_kembali']."</td>";
                echo"<td>".$sewa['harga']."</td>";
                echo"<td>";
                echo "<a href='edit.php?id=".$sewa['id_penyewa']."'>Edit</a>  |";
                echo "<a href='hapus.php?id=".$sewa['id_penyewa']."'>Hapus</a>";
                echo"</td>";
            echo"</tr>";

            }
            ?>
        </table>
    </body>
</html>