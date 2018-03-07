<form action="coba-if.php" method="get">
    Kelas : <input type="text" name="kelas"><br>
    <input type="submit" value="proses">
</form>
<br>
<?php
    if(array_key_exists("kelas", $_GET)){
        
        if($_GET['kelas']==''){
            echo 'Eitttttssssss, ga boleh kosong!';
            return;
        }

        echo 'Kelas : ' . $_GET["kelas"] . '<br>';
        echo 'Wah ternyata kamu di kelas '. $_GET['kelas'];
    } else{
        echo 'Silahkan masukan data!';
    }
?>