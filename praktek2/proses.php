<?php
    if($_POST['nama'] == null || $_POST['kelas'] == null){
        echo "Mohon isi nama dan kelas <br>";
        echo '<a href="input.php">Back</a>';
        die();
    }
?>

<h2>Selamat Datang <?php echo $_POST['nama'];?></h2>
<hr>
Pada semester ini, Anda masuk ke kelas <?php echo $_POST['kelas'];?>