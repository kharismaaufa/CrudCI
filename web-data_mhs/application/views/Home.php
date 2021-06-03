<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Haloooo DUNIAAA</h2>
    <h3>Belajar dengan menggunakan CI</h3>
    <a href="<?php echo base_url()."index.php/hal_utama/baca_form"; ?>">Nambah Data</a><br><br>
    
    <table border="1">
        <tr>
            <td>Kode</td>
            <td>Nama</td>
            <td>SKS</td>
            <td>Syarat</td>
            <td>Aksi</td>
        </tr>

        <?php
            foreach($matkulKu as $mat){
        ?>
            <tr>
                <td><?php echo $mat["kode"] ?></td>
                <td><?php echo $mat["nama"] ?></td>
                <td><?php echo $mat["sks"] ?></td>
                <td><?php echo $mat["syarat"] ?></td>
                <td>
                    <a href="<?php echo base_url()."index.php/hal_utama/hapus_data/".$mat['no']; ?>">Hapus</a>|
                    <a href="<?php echo base_url()."index.php/hal_utama/ambil_Datawhere/".$mat['no']; ?>">Update</a>
                </td>
            </tr>
        <?php } ?>
    </table>

<!-- REFRENSI
    <?php
        foreach($matkulKu as $mat){
            echo "Kode : ".$mat["kode"]."<br>";
            echo "Nama : ".$mat["nama"]."<br>";
            echo "Sks : ".$mat["sks"]."<br>";
            echo "Syarat : ".$mat["syarat"]."<br>"."<br>";
        }
        echo "Selamat Datang pak";
    ?>
     -->

</body>
</html>