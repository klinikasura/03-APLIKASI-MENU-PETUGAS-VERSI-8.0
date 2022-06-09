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
<center><button type="button" class="get_bg" id="goFS">KLIK LAYAR PENUH</button>
<button type="button" class="get_bg">
 <a href="http://192.168.88.203/dashboard/indexmenu.php" >BERANDA</a>
</button></center>


<script>

  var goFS = document.getElementById("goFS");

  goFS.addEventListener("click", function() {

      document.body.requestFullscreen();

  }, false);

</script>







<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>ANTRIAN POLIKLINIK</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 18px}
-->
</style>

<link href="http://192.168.88.203/dashboard/download.jpeg" rel="icon" type="image/png" /></head>



</head>
<body>
	<header id="home"class="section">
	<div class="header_main">
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                          <div class="logo">
                             <div align="left"><a href="http://192.168.88.203/dashboard/indexmenu.php"><img src="http://192.168.88.203/dashboard/download.jpeg" width="86" height="76" style="max-width: 100%;"></a>                           
                              
                               
                               <span class="style2"><a href="http://192.168.88.203/dashboard" target="_self">  </a></div> </div> 
                           </button></div>
                        </div>
                     </div>
                  </div>
                  







     <?php

            $kd_poli   = str_replace("_"," ",isset($_GET['kd_poli']))?str_replace("_"," ",$_GET['kd_poli']):NULL;

            $kd_dokter = str_replace("_"," ",isset($_GET['kd_dokter']))?str_replace("_"," ",$_GET['kd_dokter']):NULL;

            $setting   = mysqli_fetch_array(bukaquery("select nama_instansi,alamat_instansi,kabupaten,propinsi,kontak,email,logo from setting"));

            echo "   

               <table width='100%' align='center' border='0' class='tbl_form' cellspacing='0' cellpadding='0'>

                      <tr>

                            <td  width='10%' align='right' valign='center'>

                                    

                            </td>

                            <td>

                               

                                      </font> 

                                      <font size='5' color='fda853' face='Tahoma' >Antrian Poli ".getOne("select nm_poli from poliklinik where kd_poli='".$kd_poli."'").", Dokter ".getOne("select nm_dokter from dokter where kd_dokter='".$kd_dokter."'")."<br> ".date("d-M-Y", $tanggal)."  ". $jam."</font>

                                      <br><br>

                               </center>

                            </td>   

                            <td  width='10%' align='left'>

                                    &nbsp;

                            </td>  

                            <td  width='10%' align='left' valign='top'>

                                    

                            </td>                                                          

                     </tr>

              </table> "; 

	?>

	<table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>

	     <tr class='head5'>

              <td width='100%'><div align='center'></div></td>

         </tr>

    </table>

	<table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>

	     <tr class='head4'>

              <td width='10%'><div align='center'><font size='5'><b>NO</b></font></div></td>

              <td width='25%'><div align='center'><font size='5'><b>NO.RM</b></font></div></td>

              <td width='65%'><div align='center'><font size='5'><b>NAMA PASIEN</b></font></div></td>

         </tr>



	<?php  

	    

		$_sql="select reg_periksa.no_reg,reg_periksa.no_rkm_medis,pasien.nm_pasien 

                       from reg_periksa inner join pasien on reg_periksa.no_rkm_medis=pasien.no_rkm_medis

                       where reg_periksa.kd_poli='".$kd_poli."' and reg_periksa.kd_dokter='".$kd_dokter."' 

                       and reg_periksa.tgl_registrasi='".date("Y-m-d", $tanggal)."' and stts='Belum' order by reg_periksa.no_reg" ;  

		$hasil=bukaquery($_sql);



		while ($data = mysqli_fetch_array ($hasil)){

			echo "<tr class='isi7' >

                                <td align='center'><font size='5' color='gray' face='Tahoma'>".$data['no_reg']."</font></td>

                                <td align='center'><font color='#DDDD00' size='5'  face='Tahoma'>".$data['no_rkm_medis']."</font></td>

                                <td align='center'><font color='gren' size='5'  face='Tahoma'>".$data['nm_pasien']."</font></td>

                            </tr> ";

		}

	?>

	</table>

	<table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>

	     <tr class='head5'>

              <td width='100%'><div align='center'></div></td>

         </tr>

    </table>

</body>

<?php 

  echo "<meta http-equiv='refresh' content='30;URL=?kd_dokter=".str_replace(" ","_",$kd_dokter)."&kd_poli=".str_replace(" ","_",$kd_poli)."'>";
?>

---------------------------------------------------------------------------------------------------------------------------------------------------------
<table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>
	     <tr class='head5'>
              <td width='100%'><div align='center'></div></td>
         </tr>
    </table>
	<table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>
	     <tr class='head4'>
              <td width='40%'><div align='left'><font size='5'><b>KELAS KAMAR</b></font></div></td>
              <td width='20%'><div align='center'><font size='5'><b>JUMLAH BED</b></font></div></td>
              <td width='20%'><div align='center'><font size='5'><b>BED TERISI</b></font></div></td>
              <td width='20%'><div align='center'><font size='5'><b>BED KOSONG</b></font></div></td>
         </tr>

	<?php  
		$_sql="Select kelas from kamar where statusdata='1' group by kelas" ;  
		$hasil=bukaquery($_sql);

		while ($data = mysqli_fetch_array ($hasil)){
			echo "<tr class='isi7' >
					<td align='left'><font size='5' color='#BB00BB' face='Tahoma'><b>".$data['kelas']."</b></font></td>
					<td align='center'>
					     <font size='6' color='red' face='Tahoma'>
					      <b>";
					       $data2=mysqli_fetch_array(bukaquery("select count(kelas) from kamar where statusdata='1' and kelas='".$data['kelas']."'"));
					       echo $data2[0];
					echo "</b>
					      </font>
					</td>
					<td align='center'>
					     <font color='#DDDD00' size='6'  face='Tahoma'>
					      <b>";
						   $data2=mysqli_fetch_array(bukaquery("select count(kelas) from kamar where statusdata='1' and kelas='".$data['kelas']."' and status='ISI'"));
						   echo $data2[0];
					echo "</b>
					      </font>
					</td>
					<td align='center'>
					      <font color='gren' size='6'  face='Tahoma'>
					      <b>";
						   $data2=mysqli_fetch_array(bukaquery("select count(kelas) from kamar where statusdata='1' and kelas='".$data['kelas']."' and status='KOSONG'"));
						   echo $data2[0];
					echo "</b>
					     </font>
					</td>
				</tr> ";
		}
	?>
	</table>
	<table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>
	     <tr class='head5'>
              <td width='100%'><div align='center'></div></td>
         </tr>
    </table>
</body>
----------------------------------------------------------------------------------------------------------------------------------------------------------

<table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>
	     <tr class='head5'>
              <td width='100%'><div align='center'></div></td>
         </tr>
    </table>
	<table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>
	     <tr class='head4'>
              <td width='40%'><div align='center'><font size='5'><b>NAMA KAMAR</b></font></div></td>
              <td width='20%'><div align='center'><font size='5'><b>JUMLAH BED</b></font></div></td>
              <td width='20%'><div align='center'><font size='5'><b>BED TERISI</b></font></div></td>
              <td width='20%'><div align='center'><font size='5'><b>BED KOSONG</b></font></div></td>
         </tr>

	<?php  
		$_sql="Select * From bangsal where status='1' and kd_bangsal in(select kd_bangsal from kamar)" ;  
		$hasil=bukaquery($_sql);

		while ($data = mysqli_fetch_array ($hasil)){
			echo "<tr class='isi7' >
					<td align='left'><font size='5' color='#BB00BB' face='Tahoma'><b>".$data['nm_bangsal']."</b></font></td>
					<td align='center'>
					     <font size='6' color='red' face='Tahoma'>
					      <b>";
					       $data2=mysqli_fetch_array(bukaquery("select count(kd_bangsal) from kamar where kamar.statusdata='1' and kd_bangsal='".$data['kd_bangsal']."'"));
					       echo $data2[0];
					echo "</b>
					      </font>
					</td>
					<td align='center'>
					     <font color='#DDDD00' size='6'  face='Tahoma'>
					      <b>";
						   $data2=mysqli_fetch_array(bukaquery("select count(kd_bangsal) from kamar where kamar.statusdata='1' and kd_bangsal='".$data['kd_bangsal']."' and status='ISI'"));
						   echo $data2[0];
					echo "</b>
					      </font>
					</td>
					<td align='center'>
					      <font color='gren' size='6'  face='Tahoma'>
					      <b>";
						   $data2=mysqli_fetch_array(bukaquery("select count(kd_bangsal) from kamar where kamar.statusdata='1' and kd_bangsal='".$data['kd_bangsal']."' and status='KOSONG'"));
						   echo $data2[0];
					echo "</b>
					     </font>
					</td>
				</tr> ";
		}
	?>
	</table>
	<table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>
	     <tr class='head5'>
              <td width='100%'><div align='center'></div></td>
         </tr>
    </table>
</body>
---------------------------------------------------------------------------------------------------------------------------------------------------------

<center> RS. Asura </center>
<center> Aplikasi Versi 8.0 </center>
