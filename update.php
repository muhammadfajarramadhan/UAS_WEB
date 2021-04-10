<?php
include 'config.php';
$no 		= $_POST['no'];
$jenis 		= $_POST['jenis_zakat'];
$nominal	= $_POST['nominal'];
$nama 		= $_POST['nama'];
$nomor		= $_POST['hp'];
$email 		= $_POST['e-mail'];
$bank 		= $_POST['bank'];
$rekening 	= $_POST['rekening'];

$update = "UPDATE zakat SET no='$no', jenis_zakat='$jenis', nominal='$nominal', nama='$nama', no_hp='$nomor', email='$email', nama_bank='$bank', no_rekening='$rekening' WHERE no ='$no'"; 
$hasil=mysqli_query($con,$update); 
if ($hasil) 
{ 
 	echo "<SCRIPT>alert('Data Berhasil Di Update...');window.location='tampil.php'</SCRIPT>";
}
else 
{ 
 	echo "<SCRIPT>alert('Gagal Merubah Data...');window.location='edit.php'</SCRIPT>";
} 
?>
