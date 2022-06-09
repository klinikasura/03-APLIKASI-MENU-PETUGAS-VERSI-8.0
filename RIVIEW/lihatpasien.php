<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'sikdraisyah'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT no_rkm_medis, nm_pasien,no_ktp,jk,tmp_lahir,tgl_lahir,nm_ibu,alamat
		FROM pasien';
		
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
<title>DAFTAR PASIEN</title><table border="1">
		<thead>
			<tr>
				<th bgcolor="#00FF00"><p align="left" class="style12">No. RM</p></th>
				<th bgcolor="#00FF00"><p align="left" class="style12">Nama Pasien</p></th>
				
			
<th bgcolor="#00FF00"><p align="center" class="style12">Jenis Kelamin</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Tempat Lahir</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Tanggal Lahir</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Nama Ibu Kandung</p></th>
<th bgcolor="#00FF00"><p align="center" class="style12">Alamat</p></th>


			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
	  <td bgcolor="#CCCCCC"><p align="left" class="style13">'.$row['no_rkm_medis'].'</p></td>
			<td bgcolor="#CCCCCC"><p align="left" class="style13">'.$row['nm_pasien'].'</p></td>
		
	
			<td bgcolor="#FFFFFF"><p align="left" class="style13">'.$row['jk'].'</p></td>
			<td bgcolor="#FFFFFF"><p align="left" class="style13">'.$row['tmp_lahir'].'</p></td>
			<td bgcolor="#FFFFFF"><p align="left" class="style13">'.$row['tgl_lahir'].'</p></td>
			<td bgcolor="#FFFFFF"><p align="left" class="style13">'.$row['nm_ibu'].'</p></td>
	<td bgcolor="#FFFFFF"><p align="left" class="style13">'.$row['alamat'].'</p></td>
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


