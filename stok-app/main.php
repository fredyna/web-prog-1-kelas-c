
<h2>Aplikasi Stok Barang</h2>
<hr>
<a href="input.php">Input Data</a>
<table border=1>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Action</th>
    </tr>
<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
        echo "</td></tr>";
    }

    $query = "select * from stok_barang";
    $data = $koneksi->query($query);
    if($data->num_rows <= 0){
        echo "<tr>";
        echo "<td colspan='5'>Tidak ada data</td>";
        echo "</tr>";
    } else{
        while($row = $data->fetch_assoc()){
            $no = 1;
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['kode']."</td>";
            echo "<td>".$row['nama_barang']."</td>";
            echo "<td>".$row['stok']."</td>";
            echo '<td><a href="form-edit.php?kode='.$row['kode'].'">Edit</a>';
            echo ' <a href="hapus.php?kode='.$row['kode'].'">Hapus</a></td>';
            echo "</tr>";
        }
    }

?>
</table>