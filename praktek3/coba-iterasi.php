<h3>Aplikasi Iterasi</h3>
<hr>
<form action="coba-iterasi.php" method="post">
    Iterasi angka dari <input type="text" name="awal"> 
    Sampai <input type="text" name="akhir"><br>
    Kelipatan <input type="text" name="kelipatan"><br>
    <input type="submit" value="jalankan">
</form>

<?php
    if(array_key_exists('awal',$_POST) && array_key_exists('akhir', $_POST)){
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];
        $selisih = $akhir - $awal;
        if($selisih <= 0){
            echo "Maaf, nilai akhir harus lebih besar dari nilai awal!";
            return;
        }

        if($_POST['kelipatan']!=''){
            $kelipatan = $_POST['kelipatan'];
            while($awal <= $akhir){
                echo $awal. '<br>';
                $awal += $kelipatan;
            }
        } else{
            for($counter = $_POST['awal']; $counter <= $_POST['akhir']; $counter++){
                echo $counter . '<br>';
            }
        }

    } else{
        echo "Maaf, nilai awal dan akhir belum ditentukan";
    }
?>