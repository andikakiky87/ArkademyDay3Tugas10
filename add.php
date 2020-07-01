<?php
    include("config.php"); 

    if(isset($_POST['daftar'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $sql = "INSERT INTO produk Value ('$id','$nama', '$keterangan', '$harga', '$jumlah')";

        $query = mysqli_query($mysql, $sql);
        if( $query ) {
            // kalau berhasil alihkan ke halaman list-siswa.php
            header('Location: index.php');
        } else {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan...");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 10</title>
</head>
<body>
    <center>
    <h1>Tambah Produk</h1>
    <form action=""  method="POST">
            <p>
            <label for="id">ID: </label>
            <textarea name="id"></textarea>
            </p>
            <p>
            <label for="nama">Nama: </label>
            <textarea name="nama"></textarea>
            </p>
            <p>
            <label for="keterangan">Keterangan: </label>
            <textarea name="keterangan"></textarea>
            </p>
            <p>
            <label for="harga">Harga: </label>
            <textarea name="harga"></textarea>
            </p>
            <p>
            <label for="jumlah">Jumlah: </label>
            <textarea name="jumlah"></textarea>
            </p>
            <p>
            <input type="submit" name="daftar" value="Daftar">
            </p>
    </form>
    <a href="index.php">Back</a>
    </center>
</body>
</html>