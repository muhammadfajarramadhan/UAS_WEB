<?php
include 'config.php';
$no = $_GET['no'];
$perintah="SELECT * FROM zakat WHERE no ='$no'";
$hasil=mysqli_query($con,$perintah);
$data=mysqli_fetch_array($hasil);
?>
<form name=edit method=post action=update.php>
<input type="hidden" name="ID" value="<?php echo "$data[no]" ?>">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit Data</title>
</head>
<style>
    body{
      height:297mm;
      width:210mm;
    }
</style>
<body >
    <div style="width: 58%;  margin: 4px auto; padding: 1x;">
        <h1 style="text-align: center">INPUT DATA</h1>
        <h1 style="text-align: center">PEMBAYARAN ZAKAT</h1>
        <hr>
        <form action="update.php" method="POST">
            <h3 style="display: block; margin-bottom: 5px;">No</h3>
            <input type="number" name="no" value="<?php echo "$data[no]" ?>" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Jenis Zakat</h3>
            <select name="jenis_zakat" style="width: 99%; height: 20px;">
                <?php
                include 'config.php';
                include 'config.php';
                $no = $_GET['no'];
                $perintah="SELECT * FROM zakat WHERE no ='$no'";
                $hasil=mysqli_query($con,$perintah);
                $data=mysqli_fetch_array($hasil);
                    if (isset($data['jenis_zakat'])) 
                    {
                        $select="selected";
                    }
                    else
                    {
                        $select="-";
                    }
                      echo "<option>".$data['jenis_zakat']."</option>";
                ?>      
                <option value="Zakat Penghasilan">Zakat Penghasilan</option>
                <option value="Zakat Maal">Zakat Maal</option>
                <option value="Zakat Fitrah">Zakat Fitrah</option>
            </select>

            <h3 style="display: block; margin-bottom: 5px;">Nominal</h3>
            <input type="text" value="<?php echo "$data[nominal]" ?>" name="nominal" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Nama Lengkap</h3>
            <input type="text" value="<?php echo "$data[nama]" ?>" name="nama" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Nomor HP</h3>
            <input type="text" value="<?php echo "$data[no_hp]" ?>" name="hp" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Email</h3>
            <input type="email" value="<?php echo "$data[email]" ?>" name="e-mail" style="width: 99%; height: 20px;">

            <h3 style="display: block; margin-bottom: 5px;">Nama Bank</h3>
            <input type="text" value="<?php echo "$data[nama_bank]" ?>" name="bank" style="width: 99%; height: 20px;">
        
            <h3 style="display: block; margin-bottom: 5px;">Nomor Rekening</h3>
            <input type="number" value="<?php echo "$data[no_rekening]" ?>" name="rekening" style="width: 99%; height: 20px;">

            <div>
                <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: green; color: white;">UPDATE</button>
                
            </div>
        </form>
    </div>
    <div align="center">
        <button type="submit" name="cencel" style="margin-top: 15px; height: 40px; background-color: red; color: white;" onclick="window.location.href='tampil.php'">CENCEL</button>                
    </div>
</body>
</html>
