<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    }

    $nim = $_GET['kode'];

    $query = "delete from stok_barang where kode='$nim'";
    if($koneksi->query($query)===true){
        echo "<br>Data ".$nim.' berhasil dihapus';
    } else{
        echo '<br>Data gagal dihapus';
    }
    echo "<br>";
    echo "<a href='main.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>