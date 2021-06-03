<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        foreach($matkulKu as $mat){
    ?>

        <form action="<?php echo base_url()."index.php/hal_utama/update_data" ?>" method="POST">
            No  : <input type="text" name="no" readonly value="<?php echo $mat['no']; ?>"><br>
            Kode : <input type="text" name="kode" value="<?php echo $mat['kode']; ?>"><br>
            Nama : <input type="text" name="nama" value="<?php echo $mat['nama']; ?>"><br>
            SKS : <input type="text" name="sks" value="<?php echo $mat['sks']; ?>"><br>
            Syarat : <input type="text" name="syarat" value="<?php echo $mat['syarat']; ?>"><br>
            <input type="submit"><input type="reset">
        </form>

    <?php } ?>
</body>
</html>