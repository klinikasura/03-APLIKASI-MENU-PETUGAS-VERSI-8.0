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
		 <meta http-equiv="refresh" content="120;url=http://192.168.88.203/dashboard/RIVIEW/DATAOBAT/index.php">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>DATA INVENTARIS</title></head>
<body>


<form method="GET" action="index.php" style="text-align: center;">
	<label><span class="style9">Masukan Nama Barang Inventaris :</span> </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
	<button type="submit"><span class="style9">Cari</span></button>
	    <a href="index.php"></a>
	</form>
	<table width="293%" height="176" border="1" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
		<thead>
			<tr>
				<th bgcolor="#CCCCCC"><span class="style3">Kode Barang</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Nama Barang</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Jumlah Barang</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Tahun Produksi</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">ISBN</span></th>
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

					 
					$query = "SELECT * FROM inventaris_barang WHERE kode_barang like '%".$kata_cari."%' OR nama_barang like '%".$kata_cari."%' OR nama_barang like '%".$kata_cari."%' ORDER BY nama_barang ASC";
				} else {
					//jika tidak ada pencarian, default yang dijalankan query ini
					$query = "SELECT * FROM inventaris_barang ORDER BY nama_barang ASC";
				}
				

				$result = mysqli_query($koneksi, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				//kalau ini melakukan foreach atau perulangan
				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td height="60" bordercolor="#FFFFFF"><?php echo $row['kode_barang']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['nama_barang']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['jml_barang']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['thn_produksi']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['isbn']; ?></td>
					</tr>
			<?php
			}
			?>
		</tbody>
</table>
    <a href="index.php"></a>
</body>
</html>
