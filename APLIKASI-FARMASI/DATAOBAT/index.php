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
		
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>DATA HARGA OBAT</title></head>
<body>
<audio autoplay>
      <source src="http://192.168.88.203/dashboard/AUDIO/OBAT.mp3" type="audio/mpeg">
       </audio>


<form method="GET" action="index.php" style="text-align: center;">
	<label><span class="style9">Masukan Nama Obat :</span> </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
	<button type="submit"><span class="style9">Cari</span></button>
	    <a href="index.php"></a><button><span href="http://192.168.88.203/dashboard/APLIKASI-FARMASI/DATAOBAT/" class="style9">Refresh</span></button>


	</form>

<p>
	
    <center><p>KALKULATOR</p>

    <center><div class="calculator">
        <input type="text" class="calculator-screen" value="0" >
        <div class="calculator-keys">
            <div class="row">
                <button class="all-clear">HAPUS</button>
                <button class="percentages">%</button>
                <button class="operator" value="/">&divide;</button>
            </div>

            <div class="row">
                <button class="number" value="7">7</button>
                <button class="number" value="8">8</button>
                <button class="number" value="9">9</button>
                <button class="operator" value="*">&times;</button>
            </div>
            <div class="row">
                <button class="number" value="4">4</button>
                <button class="number" value="5">5</button>
                <button class="number" value="6">6</button>
                <button class="operator" value="-">&minus;</button>
            </div>
            <div class="row">
                <button class="number" value="1">1</button>
                <button class="number" value="2">2</button>
                <button class="number" value="3">3</button>
                <button class="operator" value="+">+</button>
            </div>
            <div class="row">
                <button class="number zero-btn" value="0">0</button>
                <button class="decimal" value=".">.</button>
                <button class="equal-sign">=</button>
            </div>
        </div>
    </div>  
    <script type="text/javascript" src="script.js"></script>  


</html>

	 
	</form>


	<table width="293%" height="176" border="1" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
		<thead>
			<tr>
			
				<th bgcolor="#CCCCCC"><span class="style3">Nama Obat</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Kode Satuan</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Harga Ralan</span></th>
				<th bgcolor="#CCCCCC"><span class="style3">Harga Karyawan</span></th>
			
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

					 
					$query = "SELECT * FROM databarang WHERE nama_brng like '%".$kata_cari."%' OR nama_brng like '%".$kata_cari."%' OR nama_brng like '%".$kata_cari."%' ORDER BY nama_brng ASC";
				} else {
					//jika tidak ada pencarian, default yang dijalankan query ini
					$query = "SELECT * FROM databarang ORDER BY nama_brng ASC";
				}
				

				$result = mysqli_query($koneksi, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				//kalau ini melakukan foreach atau perulangan
				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
			
				<td bordercolor="#FFFFFF"><?php echo $row['nama_brng']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['kode_sat']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['ralan']; ?></td>
				<td bordercolor="#FFFFFF"><?php echo $row['karyawan']; ?></td>

				
			</tr>
			<?php
			}
			?>
		</tbody>
</table>
    <a href="index.php"></a>



</body>
</html>
