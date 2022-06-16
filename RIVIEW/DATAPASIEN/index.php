<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		* {
			font-family: "Trebuchet MS";
		}
		h1 {
			text-transform: uppercase;
			color: salmon;
		}
		table {
			border: 1px solid #ddeeee;
			border-collapse: collapse;
			border-spacing: 0;
			width: 70%;
			margin: 10px auto 10px auto;
		}
		th, td {
			border: 1px solid #ddeeee;
			padding: 20px;
			text-align: left;
		}
.style3 {color: #000000}
    body {
	background-color: #00CC00;
}
.style9 {font-size: x-large}
    </style>
	
	<link href="http://192.168.88.203/dashboard/download.jpeg" rel="icon" type="image/png" />
		 <meta http-equiv="refresh" content="8;url=http://192.168.88.203/dashboard/RIVIEW/DATAPASIEN/index.php">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>DATA PASIEN</title></head>
<body>


<form method="GET" action="index.php" style="text-align: center;">
	<label><span class="style9">Masukan Nama Pasien :</span> </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
	<button type="submit"><span class="style9">Cari</span></button>
	    <a href="index.php"></a>
	</form>
	<table width="293%" height="176" border="1" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
		<thead>
			<tr>
				<th bgcolor="#CCCCCC"><span class="style3">No. RM</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Nama Pasien</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Jenis Kelamin</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Tempat Lahir</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Tanggal Lahir</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Nama Ibu Kandung</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Alamat</span></th>
		
				
			</tr>
		</thead>
		<tbody>
			<?php 
			//untuk meinclude kan koneksi
			include('koneksi.php');

				//jika kita klik cari, maka yang tampil query cari ini
				if(isset($_GET['kata_cari'])) {
					//menampung variabel kata_cari dari form pencarian
					$kata_cari = $_GET['kata_cari'];

					 
					$query = "SELECT * FROM pasien WHERE no_rkm_medis like '%".$kata_cari."%' OR nm_pasien like '%".$kata_cari."%' OR nm_ibu like '%".$kata_cari."%' ORDER BY alamat ASC";
				} else {
					//jika tidak ada pencarian, default yang dijalankan query ini
					$query = "SELECT * FROM pasien ORDER BY no_rkm_medis ASC";
				}
				

				$result = mysqli_query($koneksi, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				//kalau ini melakukan foreach atau perulangan
				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td height="60" bordercolor="#FFFFFF"><?php echo $row['no_rkm_medis']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['nm_pasien']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['jk']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['tmp_lahir']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['tgl_lahir']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['nm_ibu']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['alamat']; ?></td>
								
			</tr>
			<?php
			}
			?>
		</tbody>
</table>
    <a href="index.php"></a>
</body>
</html>