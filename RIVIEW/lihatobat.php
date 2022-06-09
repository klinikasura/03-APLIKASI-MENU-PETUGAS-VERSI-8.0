<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'sikdraisyah'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT kode_brng, nama_brng,kode_sat,dasar,h_beli,ralan,kelas1,kelas2,kelas3,utama,vip,vvip,beliluar,jualbebas,karyawan,stokminimal,kdjns,isi,kapasitas,expire,status,kode_industri,kode_kategori,kode_golongan
		FROM databarang';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '
<style type="text/css">
<!--
.style12 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
.style13 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
-->
</style>
<title>HARGA OBAT DAN BHP</title><table border="1">
		<thead>
			<tr>
				<th bgcolor="#00FF00"><p align="left" class="style12">Kode Obat</p></th>
				<th bgcolor="#00FF00"><p align="left" class="style12">Nama Obat</p></th>
				
		<th bgcolor="#00FF00"><p align="center" class="style12">Kode Satuan</p></th>		
<th bgcolor="#00FF00"><p align="center" class="style12">Harga Beli</p></th>	
<th bgcolor="#00FF00"><p align="center" class="style12">Harga Ralan</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Kelas1</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Kelas2</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Kelas3</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Kelas Utama</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Kelas VIP</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Kelas VVIP</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Harga Beli Luar</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Harga Jual Bebas</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Harga Karyawan</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Stok Minimal</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Kadaluarsa</p></th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
	  <td bgcolor="#CCCCCC"><p align="left" class="style13">'.$row['kode_brng'].'</p></td>
			<td bgcolor="#CCCCCC"><p align="left" class="style13">'.$row['nama_brng'].'</p></td>
		
	  <td bgcolor="#CCCCCC"><p align="center" class="style13">'.$row['kode_sat'].'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['h_beli'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['ralan'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['kelas1'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['kelas2'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['kelas3'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['utama'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['vip'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['vvip'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['beliluar'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['jualbebas'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['karyawan'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.number_format($row['stokminimal'], 0, ',', '.').'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.$row['expire'].'</p></td>

		</tr>';
}
echo '
	</tbody>
</table>
';


// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);



