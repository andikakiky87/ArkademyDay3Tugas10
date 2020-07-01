<?php 
    include("config.php"); 
    if( isset($_GET['id']) ){

        $id = $_GET['id'];
    
        // buat query hapus
        $sql = "DELETE FROM produk WHERE id=$id";
        $query = mysqli_query($mysql, $sql);
    
        if( $query ){
            header('Location: index.php');
        } else {
            die("gagal menghapus...");
        }
    
    } else {
        die("akses dilarang...");
    }

?>