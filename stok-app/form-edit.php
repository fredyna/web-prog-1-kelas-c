<?php
    require_once('koneksi.php');

    if($_GET['kode']!=null){
        $kode = $_GET['kode'];

        $koneksiObj = new Koneksi();
        $koneksi = $koneksiObj->getKoneksi();

        if($koneksi->connect_error){
            echo "Gagal Koneksi : ". $koneksi->connect_error;
        }

        $query = "select * from stok_barang where kode='$kode'";
        $data = $koneksi->query($query);

    }
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data</title>
</head>
<body>
    <h2>Formulir Update Data</h2>
    <hr>
    <?php
        if($data->num_rows <= 0){
            echo "Data tidak ditemukan";
        } else{
            while($row = $data->fetch_assoc()){
                $namaBarang = $row['nama_barang'];
                $stok = $row['stok'];
            }
        }
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>
                    Kode Barang
                </td>
                <td>
                    : <input type="text" name="kode" value="<?php echo $_GET['kode'];?>" readonly>
                </td>
            </tr>

            <tr>
                <td>
                    Nama Barang
                </td>
                <td>
                    : <input type="text" name="nama" value="<?php echo $namaBarang;?>">
                </td>
            </tr>

            <tr>
                <td>
                    Stok Barang
                </td>
                <td>
                    : <input type="text" name="stok" value="<?php echo $stok;?>">
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

