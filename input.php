<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>INPUT</title>
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
        <form action="simpan.php" method="POST">
            <h3 style="display: block; margin-bottom: 5px;">No</h3>
            <input type="number" name="no" style="width: 120mm; height: 20px;" required="masukan">
            <h3 style="display: block; margin-bottom: 5px;">Jenis Zakat</h3>
            <select name="jenis_zakat" style="width: 122mm; height: 30px;" id="jenis_zakat">
            <option value="-">-</option>
			<option value="Zakat Penghasilan">Zakat Penghasilan</option>
			<option value="Zakat Maal">Zakat Maal</option>
			<option value="Zakat Fitrah">Zakat Fitrah</option>
			</select>
            <h3 style="display: block; margin-bottom: 5px;">Nominal</h3>
            <input type="text" name="nominal" style="width: 118mm; height: 10px;" id="nominal">
            <h3 style="display: block; margin-bottom: 5px;">Nama Lengkap</h3>
            <input type="text" name="nama" style="width: 118mm; height: 10px;" id="nama">
            <h3 style="display: block; margin-bottom: 5px;">Nomor HP</h3>
            <input type="text" name="hp" style="width: 118mm; height: 10px;" id="hp">
            <h3 style="display: block; margin-bottom: 5px;">Email</h3>
            <input type="email" name="e-mail" style="width: 120mm; height: 20px;" id="e-mail">
            <h3 style="display: block; margin-bottom: 5px;">Nama Bank</h3>
            <input type="text" name="bank" style="width: 118mm; height: 10px;" id="bank">
			
			<h3 style="display: block; margin-bottom: 5px;">Nomor Rekening</h3>
            <input type="number" name="rekening" style="width: 120mm; height: 20px;" id="rekening">
            <div>
                <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: green; color: white;">SIMPAN</button>
                <input type="reset" name="hapus" value="RESET" class="tombol" style="margin-top: 15px; height: 40px; background-color: silver; color: black;">
                <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: blue; color: white;" onclick="window.location='tampil.php'">Tampil Data</button>
                
            </div>
            </br>
            <div align="left">
                    <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: red; 
                    color: white;" onclick="window.location='logout.php'">LOG-OUT</button>
            </div>
        </form>
    </div>
</body>
</html>
