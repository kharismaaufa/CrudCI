<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url()."index.php/hal_utama/tambah_data" ?>" method="POST">
        Kode : <input type="text" name="kode"><br>
        Nama : <input type="text" name="nama"><br>
        SKS : <input type="text" name="sks"><br>
        Syarat : <input type="text" name="syarat"><br>
        <input type="submit"><input type="reset">
    </form>
</body>
</html>