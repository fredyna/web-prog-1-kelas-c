<?php
    require_once('koneksi.php');

    if($_GET['nim']!=null){
        $nim = $_GET['nim'];

        $koneksiObj = new Koneksi();
        $koneksi = $koneksiObj->getKoneksi();

        if($koneksi->connect_error){
            echo "Gagal Koneksi : ". $koneksi->connect_error;
        }

        $query = "select * from mahasiswa where nim='$nim'";
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
    <h2>Form Data Mahasiswa</h2>
    <hr>
    <?php
        if($data->num_rows <= 0){
            echo "Data tidak ditemukan";
        } else{
            while($row = $data->fetch_assoc()){
                $nim    = $row['nim'];
                $nama   = $row['nama'];
                $jl     = $row['jenis_kelamin'];
                $smt    = $row['semester'];
                $prodi  = $row['prodi'];
            }
        }
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>
                    NIM
                </td>
                <td>
                    : <input type="text" name="nim" value="<?php echo $nim;?>">
                </td>
            </tr>

            <tr>
                <td>
                    Nama
                </td>
                <td>
                    : <input type="text" name="nama" value="<?php echo $nama;?>">
                </td>
            </tr>

            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    :
                    <select name="jl" id="jl">
                        <option value="Laki-Laki" <?php echo $jl=='Laki-Laki'? 'selected':''; ?>>Laki-Laki</option>
                        <option value="Perempuan" <?php echo $jl=='Perempuan'? 'selected':''; ?>>Perempuan</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    Semester
                </td>
                <td>
                    : 
                    <select name="smt" id="smt">
                        <option value="">-- Pilih Semester --</option>
                        <?php 
                            for($i=1;$i<=8;$i++){ ?>
                                <option value="<?php echo $i;?>" <?php echo $smt==$i ? 'selected':'';?>><?php echo $i;?></option>
                        <?  } ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    Prodi
                </td>
                <td>
                    : 
                    <select name="prodi" id="prodi">
                        <option value="">-- Pilih Prodi --</option>
                        <option value="D4 Teknik Informatika" <?php echo $prodi=='D4 Teknik Informatika' ? 'selected':'';?>>D4 Teknik Informatika</option>
                        <option value="D3 Kebidanan" <?php echo $prodi=='D3 Kebidanan' ? 'selected':'';?>>D3 Kebidanan</option>
                        <option value="D3 Farmasi" <?php echo $prodi=='D3 Farmasi' ? 'selected':'';?>>D3 Farmasi</option>
                        <option value="D3 Akuntansi" <?php echo $prodi=='D3 Akuntansi' ? 'selected':'';?>>D3 Akuntansi</option>
                        <option value="D3 Teknik Komputer" <?php echo $prodi=='D3 Teknik Komputer' ? 'selected':'';?>>D3 Teknik Komputer</option>
                        <option value="D3 Teknik Mesin" <?php echo $prodi=='D4 Teknik Mesin' ? 'selected':'';?>>D3 Teknik Mesin</option>
                        <option value="D3 Teknik Elektro" <?php echo $prodi=='D4 Teknik Elektro' ? 'selected':'';?>>D3 Teknik Elektro</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

