<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'sikdraisyah'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT kode_brng, jml,harga,kd_bangsaldari,kd_bangsalke,tanggal,keterangan,no_batch,no_faktur
		FROM mutasibarang';
		
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
<title>LOG OBAT</title><table border="1">
		<thead>
			<tr>
			
				<th bgcolor="#00FF00"><p align="center" class="style12">Tanggal Mutasi Obat</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Keterangan</p></th>

			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
	
	  <td bgcolor="#CCCCCC"><p align="center" class="style13">'.$row['tanggal'].'</p></td>
<td bgcolor="#CCCCCC"><p align="center" class="style13">'.$row['keterangan'].'</p></td>



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



