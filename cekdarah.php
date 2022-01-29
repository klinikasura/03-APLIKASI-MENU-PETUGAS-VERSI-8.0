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
?>
<section id="news" data-stellar-background-ratio="2.5">
      <title>CEK STOK DARAH</title><div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Cek Ketersediaan Stok Darah</h2>
                     </div>
                </div>
                       
                <div class="col-md-12 col-sm-12">
                     <div class="news-thumb wow fadeInUp" data-wow-delay="0.3s">
                         <form id="cariKamar" name="frmCariDarah" method="post" action="" enctype=multipart/form-data>
                           <table width="100%" border='0' align="center">
                               <tr class="head">
                                  <td width="20%" align="right"><label for="darah">Keyword</label></td>
                                  <td width="1%"><label for=":">&nbsp;:&nbsp;</label></td>
                                  <td width="60%"><input name="darah" type="text" id="darah" class="form-control" value="" size="65" maxlength="250" autocomplete="off" autofocus/></td>
                                  <td width="19%" align="left">&nbsp;<input name="BtnDarah" type=submit class="btn btn-warning" value="Cari" /></td>
                               </tr>
                           </table>
                         </form>
                         <div class="table-responsive">
                            <table class="table table-hover" >
                               <tr>
                                   <th width="40%"><center>Nama Komponen Darah</center></th>
                                   <th width="20%"><center>G.D.</center></th>
                                   <th width="20%"><center>Resus</center></th>
                                   <th width="20%"><center>Jumlah</center></th>
                               </tr>
                               <?php 
                                  $darah      = trim(isset($_POST['darah']))?trim($_POST['darah']):NULL;
                                  $darah      = cleankar($darah);
                                  $querydarah = bukaquery("select utd_komponen_darah.nama,utd_stok_darah.golongan_darah,utd_stok_darah.resus,count(utd_stok_darah.kode_komponen) as jumlah from utd_komponen_darah inner join utd_stok_darah on utd_stok_darah.kode_komponen=utd_komponen_darah.kode where utd_stok_darah.status='Ada' ".(isset($darah)?" and (utd_komponen_darah.nama like '%$darah%')":"")." group by utd_stok_darah.kode_komponen,utd_stok_darah.golongan_darah,utd_stok_darah.resus order by utd_stok_darah.golongan_darah");
                                  while($rsquerydarah = mysqli_fetch_array($querydarah)) {
                                      echo "<tr>
                                              <td align='left'>".$rsquerydarah["nama"]."</td>
                                              <td align='center'>".$rsquerydarah["golongan_darah"]."</td>
                                              <td align='center'>".$rsquerydarah["resus"]."</td>
                                              <td align='center'>".$rsquerydarah["jumlah"]."</td>
                                            </tr>";
                                  }
                              ?>
                           </table> 
                         </div>
                     </div>
                </div>
           </div>
      </div>
 </section>


