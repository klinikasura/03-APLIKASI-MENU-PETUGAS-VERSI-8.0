<?php
 session_start();
 require_once('conf/conf.php');
 header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
 header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT"); 
 header("Cache-Control: no-store, no-cache, must-revalidate"); 
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache"); // HTTP/1.0
 $tanggal= mktime(date("m"),date("d"),date("Y"));
 date_default_timezone_set('Asia/Jakarta');
 $jam=date("H:i");
?>

<link href="http://192.168.88.203/dashboard/download.jpeg" rel="icon" type="image/png" />
<p></p>
<center><button id="goFS">KLIK LAYAR PENUH</button></center>
<p></p>






<script>
  var goFS = document.getElementById("goFS");
  goFS.addEventListener("click", function() {
      document.body.requestFullscreen();
  }, false);
</script>



 <center><div class="logo">
  <div align="center">
    <p><a href="http://192.168.88.203/dashboard/indexmenu.php"><img src="http://192.168.88.203/dashboard/download.jpeg" width="86" height="76" style="max-width: 100%;"></a></p>
    <h1>RS. ASURA TUGUMULYO </h1>
    <p>&nbsp;</p>
  </div>
</div><center>



<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->

<link href="http://192.168.88.203/dashboard/download.jpeg" rel="icon" type="image/png" />

<?php
    if(strpos($_SERVER['REQUEST_URI'],"pages")){
        exit(header("Location:../index.php"));
    }
?><title>JADWAL DOKTER</title>
<div class="block-header">
   
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
              <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                              <th width="30%"><center>Nama Dokter</center></th>
                                <th width="15%"><center>Hari Kerja</center></th>
                                <th width="25%"><center>Poliklinik</center></th>
                                <th width="15%"><center>Jam Mulai</center></th>
                                <th width="15%"><center>Jam Selesai</center></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $queryjadwal = bukaquery("select dokter.nm_dokter,jadwal.hari_kerja,jadwal.jam_mulai,jadwal.jam_selesai,poliklinik.nm_poli from jadwal inner join poliklinik inner join dokter on jadwal.kd_dokter=dokter.kd_dokter and jadwal.kd_poli=poliklinik.kd_poli where dokter.status='1' order by jadwal.hari_kerja,jadwal.kd_dokter");
                            while($rsqueryjadwal = mysqli_fetch_array($queryjadwal)) {
                                echo "<tr>
                                        <td align='left'>".$rsqueryjadwal["nm_dokter"]."</td>
                                        <td align='center'>".$rsqueryjadwal["hari_kerja"]."</td>
                                        <td align='center'>".$rsqueryjadwal["nm_poli"]."</td>
                                        <td align='center'>".$rsqueryjadwal["jam_mulai"]."</td>
                                        <td align='center'>".$rsqueryjadwal["jam_selesai"]."</td>
                                      </tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
