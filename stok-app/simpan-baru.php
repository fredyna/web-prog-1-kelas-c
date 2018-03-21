<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } else{
        echo 'Sambungan basis data berhasil';
    }
    // echo '<br>';
    // echo 'kode : '. $_POST['kode'] .'<br>';
    // echo 'Nama Barang : '. $_POST['nama'] .'<br>';
    // echo 'Stok : '. $_POST['stok'] .'<br>';
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];

    $query = "insert into stok_barang values('$kode', '$nama', '$stok')";
    //echo '<br>'. $query;
    if($koneksi->query($query)===true){
        echo "<br>Data ".$nama.' berhasil disimpan';
    } else{
        echo '<br>Data gagal disimpan';
    }

    $koneksi->close();
?>