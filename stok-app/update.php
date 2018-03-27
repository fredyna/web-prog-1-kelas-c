<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];

    $query = "update stok_barang set nama_barang='$nama', stok='$stok' where kode='$kode'";

    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama.' berhasil diupdate';
    } else{
        echo '<br>Data gagal diupdate';
    }
    echo "<br>";
    echo "<a href='main.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>