<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 10</title>
</head>
<body>
    <center>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    <h1>List Produk</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <a href="add.php">Tambah</a>
            <th>ID</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <?php 
    $sql = "SELECT * FROM produk";
    $query = mysqli_query($mysql, $sql);
    
    while($produk = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$produk['id']."</td>";
        echo "<td>".$produk['nama_produk']."</td>";
        echo "<td>".$produk['keterangan']."</td>";
        echo "<td>".$produk['harga']."</td>";
        echo "<td>".$produk['jumlah']."</td>";
        echo "<td>";
        echo "<a href='edit.php?id=".$produk['id']."'>Edit</a> | ";
        echo "<a href='delete.php?id=".$produk['id']."'>Delete</a> ";
        echo "</tr>";
    }
    ?>
    </table>

</center>
</body>
</html>