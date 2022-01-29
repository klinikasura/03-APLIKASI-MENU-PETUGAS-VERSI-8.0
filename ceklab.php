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


    <title>CEK BIAYA LAB</title>

<?php
    if(strpos($_SERVER['REQUEST_URI'],"pages")){
        exit(header("Location:../index.php"));
    }
?>
<section id="news" data-stellar-background-ratio="2.5">
      <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Cek Harga Laboratorium</h2>
                     </div>
                </div>
                       
                <div class="col-md-12 col-sm-12">
                     <div class="news-thumb wow fadeInUp" data-wow-delay="0.3s">
                         <form id="cariKamar" name="frmCariLaborat" method="post" action="" enctype=multipart/form-data>
                           <table width="100%" border="0" align="center">
                               <tr class="head">
                                  <td width="20%" align="right"><label for="laborat">Keyword</label></td>
                                  <td width="1%"><label for=":">&nbsp;:&nbsp;</label></td>
                                  <td width="60%"><input name="laborat" type="text" id="laborat" pattern="[a-zA-Z0-9, ./@_]{1,65}" title=" a-zA-Z0-9, ./@_ (Maksimal 65 karakter)" class="form-control" value="" size="65" maxlength="250" autocomplete="off" autofocus/></td>
                                  <td width="19%" align="left">&nbsp;<input name="BtnLaborat" type=submit class="btn btn-warning" value="Cari" /></td>
                               </tr>
                           </table>
                         </form>
                         <div class="table-responsive">
                            <table class="table table-hover" >
                               <tr>
                                   <th width="70%"><center>Paket Pemeriksaan</center></th>
                                   <th width="15%"><center>Kelas</center></th>
                                   <th width="15%"><center>Tarif Laborat</center></th>
                               </tr>
                               <?php 
                                  $laborat      = trim(isset($_POST['laborat']))?trim($_POST['laborat']):NULL;
                                  $laborat      = cleankar($laborat);
                                  $querylaborat = bukaquery("select jns_perawatan_lab.kd_jenis_prw,jns_perawatan_lab.nm_perawatan,jns_perawatan_lab.total_byr,jns_perawatan_lab.kelas from jns_perawatan_lab inner join penjab on penjab.kd_pj=jns_perawatan_lab.kd_pj where jns_perawatan_lab.status='1' and penjab.png_jawab like '%umum%' ".(isset($laborat)?" and (jns_perawatan_lab.nm_perawatan like '%$laborat%' or jns_perawatan_lab.kelas like '%$laborat%')":"")." order by jns_perawatan_lab.kelas");
                                  while($rsquerylaborat = mysqli_fetch_array($querylaborat)) {
                                      echo "<tr>
                                              <td align='left'>".$rsquerylaborat["nm_perawatan"]."</td>
                                              <td align='center'>".$rsquerylaborat["kelas"]."</td>
                                              <td align='center'>".($rsquerylaborat["total_byr"]>0?formatDuit($rsquerylaborat["total_byr"]):"")."</td>
                                            </tr>";
                                      $querydetaillaborat= bukaquery("select Pemeriksaan,biaya_item from template_laboratorium where kd_jenis_prw='$rsquerylaborat[0]' and biaya_item>0 order by urut");
                                      while($rsquerydetaillaborat=mysqli_fetch_array($querydetaillaborat)){
                                           echo "<tr>
                                                   <td align='left'>&nbsp;&nbsp;".$rsquerydetaillaborat["Pemeriksaan"]."</td>
                                                   <td align='center'>".$rsquerylaborat["kelas"]."</td>
                                                   <td align='center'>".formatDuit($rsquerydetaillaborat["biaya_item"])."</td>
                                                 </tr>";
                                      }
                                  }
                              ?>
                            </table> 
                         </div>
                     </div>
                </div>
           </div>
      </div>
 </section>
