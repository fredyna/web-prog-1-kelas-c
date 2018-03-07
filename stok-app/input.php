<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
</head>
<body>
    <h2>Formulir Entri Data</h2>
    <hr>
    <form action="simpan-baru.php">
        <table>
            <tr>
                <td>
                    Kode Barang
                </td>
                <td>
                    : <input type="text" name="kode">
                </td>
            </tr>

            <tr>
                <td>
                    Nama Barang
                </td>
                <td>
                    : <input type="text" name="nama">
                </td>
            </tr>

            <tr>
                <td>
                    Stok Barang
                </td>
                <td>
                    : <input type="text" name="stok">
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>

