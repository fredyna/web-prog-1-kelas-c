
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width:90%;
            margin-left:5%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th{
            height:30px;
            background-color: #0099ff;
        }
        .nim{width:15%;}
        .nama{width:25%}
        .jl{width:15%}
        .smt{width:10%}
        .prodi{width:25%}
        .aksi{width:10%}
        .center{text-align:center;}

    </style>
</head>
<body>
    <h2>Aplikasi Data Mahasiswa</h2>
    <hr>
    <a href="input.php">Input Data</a>
    <br><br>
    <table>
        <tr>
            <th class="nim">NIM</th>
            <th class="nama">Nama</th>
            <th class="jl">Jenis Kelamin</th>
            <th class="smt">Semester</th>
            <th class="prodi">Prodi</th>
            <th class="Aksi">Aksi</th>
        </tr>
    <?php
        require_once('koneksi.php');

        $koneksiObj = new Koneksi();
        $koneksi = $koneksiObj->getKoneksi();

        if($koneksi->connect_error){
            echo "Gagal Koneksi : ". $koneksi->connect_error;
            echo "</td></tr>";
        }

        $query = "select * from mahasiswa";
        $data = $koneksi->query($query);
        if($data->num_rows <= 0){
            echo "<tr>";
            echo "<td colspan='6' class='center'><i>Tidak ada data</i></td>";
            echo "</tr>";
        } else{
            while($row = $data->fetch_assoc()){
                $no = 1;
                echo "<tr>";
                echo "<td class='center'>".$row['nim']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['jenis_kelamin']."</td>";
                echo "<td class='center'>".$row['semester']."</td>";
                echo "<td>".$row['prodi']."</td>";
                echo '<td class="center"><a href="form-edit.php?nim='.$row['nim'].'">Edit</a>';
                echo ' <a href="hapus.php?nim='.$row['nim'].'">Hapus</a></td>';
                echo "</tr>";
            }
        }

    ?>
    </table>
</body>
</html>
