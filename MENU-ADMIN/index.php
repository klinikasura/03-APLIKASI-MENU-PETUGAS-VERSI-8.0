<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Aplikasi RS. Asura</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  	<link href="http://192.168.88.203/dashboard/download.jpeg" rel="icon" type="image/png" />
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard Administrasi</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            
          </li>
          <li class="active"><a href="index.php"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Data Administrasi <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="http://192.168.88.203/webapps/poli.php"target="frame">Data Pasien Hari Ini</a></li>
     
	   
	   
	    <li><a href="http://192.168.88.203/dashboard/APLIKASI/KHANZALITE-PAKESUARA/admin/pasien/manage?t=c0ffd1106a72"target="frame">Pendaftaran Pasien</a></li>
		
		<li><a href="http://192.168.88.203/dashboard/APLIKASI/KHANZALITE-PAKESUARA/admin/rawat_jalan/index?t=c0ffd1106a72"target="frame">Info Rawat Jalan</a></li>
		
		<li><a href="http://192.168.88.203/dashboard/APLIKASI/KHANZALITE-PAKESUARA/admin/rawat_inap/manage?t=c0ffd1106a72"target="frame">Info Rawat Inap</a></li>
		
		
		<li><a href="http://192.168.88.203/dashboard/APLIKASI/KHANZALITE-PAKESUARA/admin/pasien_galleries/manage?t=c0ffd1106a72"target="frame">Galeri Pasien</a></li>
		
		
	
	   
            
                
            </ul>
          </li>
          
          
		  
		  
		  
		  
		
          </li>
  
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Data Cetak <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              
       <li><a href="http://192.168.88.203/dashboard/pendaftaran.html"target="frame">Cetak Dokumen</a></li>
	   
	   

 
            </ul>
          </li>
          
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <li><a href="http://192.168.88.203/dashboard/"  data-target="index.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
      
   <iframe src="http://192.168.88.203/dashboard/MENU-ADMIN/ADMIN.jpg" name="frame" width="100%" height="600px" allowtransparency="true" noresize="noresize"></iframe>
          </ol>
          <div class="margin-bottom-30">
            <div class="row"></div>
          </div>         

          <div class="row"></div>
          <div class="templatemo-panels">
            <div class="row"></div>
            <div class="row"></div>
          </div>    
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>
      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <div class="container"></div>
        </div>
      
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright &copy; Aplikasi RS. Asura 
          
          <br>
          Aplikasi Versi 6.0 </p>
        </div>
      </div>
    </div>
  </footer>
      </footer>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/templatemo_script.js"></script>
    <script type="text/javascript">
    // Line chart
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
      {
        label: "My First dataset",
        fillColor : "rgba(220,220,220,0.2)",
        strokeColor : "rgba(220,220,220,1)",
        pointColor : "rgba(220,220,220,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(220,220,220,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      },
      {
        label: "My Second dataset",
        fillColor : "rgba(151,187,205,0.2)",
        strokeColor : "rgba(151,187,205,1)",
        pointColor : "rgba(151,187,205,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(151,187,205,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      }
      ]

    }

    window.onload = function(){
      var ctx_line = document.getElementById("templatemo-line-chart").getContext("2d");
      window.myLine = new Chart(ctx_line).Line(lineChartData, {
        responsive: true
      });
    };

    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
      var btn = $(this);
      btn.button('loading');
      // $.ajax(...).always(function () {
      //   btn.button('reset');
      // });
  });
  </script>
</body>
</html>