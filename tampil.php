<html>
<head>
    <title>Data Pembayar Zakat</title>
</head>
<style>
    table td, table th {
        border: 1px solid black;
        padding: 8px;
    }
    body{
      height:297mm;
      width:210mm;
    }
</style>
<body>
    <div> 
        <center>
            <td>
                <h1>
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $jam = date("H:i:s");
                    echo "Data Pembayar Zakat<br>";
                    echo "Per " .date('d-F-Y');
                    echo " ".$jam."<br>";
                    
                    ?>
                </h1>
                

            </td>
            <tr><br></tr>
            <tr><br></tr>
            <table style="width: 100%; border: 1px solid black;">
                <tr>
                    <td>No</td>
					<td>Jenis Zakat</td>
                    <td>Nominal</td>
                    <td>Nama Lengkap</td>
                    <td>Nomor HP</td>
					<td>Email</td>
					<td>Nama Bank</td>
					<td>Nomor Rekening</td>
                    <td>Action</td>
                </tr>

                <tbody>
                <?php
                include "config.php";
                $perintah="SELECT * FROM zakat ORDER BY no ASC";
                $hasil=mysqli_query($con,$perintah);
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                    <td><?php echo $data['no'];?></td>
                    <td><?php echo $data['jenis_zakat'];?></td>
                    <td><?php echo $data['nominal'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['no_hp'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['nama_bank'];?></td>
                    <td><?php echo $data['no_rekening'];?></td>
                    <td>
                    <input type="submit" name="Edit" class="tombol" value="Edit" style=" width: 60px; height: 25px; background-color: grey; color: white;"
                    onclick="window.location.href='edit.php?no=<?php echo $data['no'];?>'"><br>
                    <hr>
                    <input type="submit" name="Hapus" class="tombol" value="Hapus" style="width: 60px; height: 25px; background-color: red; color: white;"
                    onclick="window.location.href='delete.php?no=<?php echo $data['no'];?>'">
                    </td>   
                </tr>
            </tbody>
            <?php
            }
            ?>
                
            </table>
                </br>
                <div align="left">
                    <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: blue; color: white;" onclick="window.location='input.php'">Tambah Data</button>
                </div>
                <div align="right">
                    <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: green; color: white;" onclick="window.location='cetak.php'">CETAK</button>
                </div>
                <div align="left">
                    <button type="submit" name="simpan" style="margin-top: 15px; height: 40px; background-color: red; color: white;" onclick="window.location='logout.php'">LOG-OUT</button>
                </div>
        </center>
    </div>
</body>
</html>
