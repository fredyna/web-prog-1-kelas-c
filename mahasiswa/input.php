<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Form Data Mahasiswa</h2>
    <hr>
    <form method="post" action="simpan.php">
        <table>
            <tr>
                <td>
                    NIM
                </td>
                <td>
                    : <input type="text" name="nim">
                </td>
            </tr>

            <tr>
                <td>
                    Nama
                </td>
                <td>
                    : <input type="text" name="nama">
                </td>
            </tr>

            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    :
                    <select name="jl" id="jl">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
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
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
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
                        <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                        <option value="D3 Kebidanan">D3 Kebidanan</option>
                        <option value="D3 Farmasi">D3 Farmasi</option>
                        <option value="D3 Akuntansi">D3 Akuntansi</option>
                        <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                        <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                        <option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
         <button type="button" onclick="window.location.href='index.php'">Batal</button>
    </form>
</body>
</html>

