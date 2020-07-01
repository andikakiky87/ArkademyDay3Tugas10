<?php
    include("config.php"); 

    $id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id = $id";
    $query = mysqli_query($mysql, $sql);
    $produk = mysqli_fetch_assoc($query);
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }
    if(isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $sql = "UPDATE produk SET nama_produk   ='$nama', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id= $id";
    
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
    <h1>Edit Produk</h1>
    <form action=""  method="POST">
            <p>
            <label for="id">ID: </label>
            <input type="text" name="id" value="<?php echo $produk["id"] ?>" >
            </p>
            <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" value="<?php echo $produk["nama_produk"] ?>" >
            </p>
            <p>
            <label for="keterangan">Keterangan: </label>
            <input type="text" name="keterangan" value="<?php echo $produk["keterangan"] ?>" >
            </p>
            <p>
            <label for="harga">Harga: </label>
            <input type="text" name="harga" value="<?php echo $produk["harga"] ?>" >
            </p>
            <p>
            <label for="jumlah">Jumlah: </label>
            <input type="text" name="jumlah" value="<?php echo $produk["jumlah"] ?>" >
            </p>
            <p>
            <input type="submit" name="simpan" value="Simpan">
            </p>
    </form>
    <a href="index.php">Back</a>
    </center>
</body>
</html>