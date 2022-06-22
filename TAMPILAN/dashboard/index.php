<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Aplikasi RS. Asura</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker.css" rel="stylesheet">
		<link href="css/bootstrap-table.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
		<link href="http://192.168.88.203/dashboard/download.jpeg" rel="icon" type="image/png" 
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class=""></i>MASTER DATA RS. ASURA</strong></a>

            <hr>

            <ul class="nav nav-stacked">
            
    <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#menu3">DATA POLIKLINIK<i class=""></i></a>

        <ul class="nav nav-stacked collapse" id="menu3">
            <li><a href="?module=5.2">DATA JUMLAH PASIEN</a> </li>
                      <li><a href="?module=3.15">DATA JUMLAH CARA BAYAR PASIEN</a> </li>
					  <li><a href="?module=5.1">DATA JUMLAH PASIEN BARU DAN LAMA</a> </li>
					      </ul>
    </li>
				
				
                      
                    </ul>
				</li>
				
				</div>
        <!-- /col-3 -->
        <div class="col-sm-9">
		<a href="#"><strong><i class=""></i></strong></a>
            <hr>
			<div class="panel panel-default">
                        <?php include"module.php"; ?>
    </div>
            <!-- column 2 -->
            
            

            
<!-- /Main -->

<footer class="text-center"></footer>

<!-- /.modal -->
	<!-- script references -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/jquery.maskedinput.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/bootstrap-table.js"></script>
		<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
			<script>
		jQuery(function($){
            $("#tgl1").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
			$("#tgl2").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
            $("#npwp").mask("99-999-999-9-999-999");
			$("#jam").mask("99:99");
			$("#jam1").mask("99:99");
        });
        $('#calender').datepicker({
        autoclose:true, orientation:'top right',
                'default': 'now'
        });
		$('#calender1').datepicker({
        autoclose:true, orientation:'top right',
                'default': 'now'
         });
        !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function(){
        $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);
        $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
                $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
        </script>
						
						
	</body>
</html>