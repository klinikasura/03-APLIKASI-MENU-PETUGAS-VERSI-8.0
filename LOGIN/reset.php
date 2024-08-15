<!DOCTYPE html>
<html>
<head>
 <title>Aplikasi RS. Asura</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="FILE.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <link href="http://192.168.88.203/dashboard/download.jpeg" rel="icon" type="image/png" />
<meta http-equiv="refresh" content="8;url=http://192.168.88.203/dashboard/LOGIN/
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<audio autoplay>
    
<source src="http://192.168.88.203/dashboard/AUDIO/RESET.mp3" type="audio/mpeg">
    </audio>
</head>
<body>
	<div class="container infinity-container">
		<div class="row">
			<div class="col-md-1 infinity-left-space"></div>

			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center infinity-form">
				<div class="text-center mb-3 mt-5">
					<img src="http://192.168.88.203/dashboard/ROBOT-AI-SYSTEM.80-FINAL-UPDATE/assets/img/ROBOT.gif" width="150px">
				</div>
				<div class="reset-form d-block">
				    <form class="reset-password-form px-3">
				    	<h4>Reset Password</h4>
				        <p class="mb-3" style="color: #777">
				            Silahkan Masukan Username SIMRS
				        </p>
				        <div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="user" name="" placeholder="Username (SIMRS)" tabindex="10"required>
						</div>
				        <div class="mb-3"> 
							<button> <a class="btn btn-blue w-100 mt-2" href="http://192.168.88.203/dashboard/LOGIN/">Kirim</a>
						</div></button> 
				    </form>
				</div>
				<div class="reset-confirmation d-none px-3">
					<div class="mb-4">
						<h4 class="mb-3">Link was sent</h4>
					    <h6 style="color: #777">Please, check your inbox for a password reset link.</h6>
					</div>
					<div class="mb-3">
					<a href="login.html">
					    <button type="submit" class="btn">Login Now</button>
					</a>
				</div>
			</div> 
			
			<div class="col-md-1 infinity-right-space"></div>
		</div>
	</div>

	<script type="text/javascript">
		function PasswordReset() {
	  	$('form.reset-password-form').on('submit', function(e) {
	      e.preventDefault();
	      $('.reset-form')
	      .removeClass('d-block')
	      .addClass('d-none');
		    $('.reset-confirmation').addClass('d-block');
			});
		}

		window.addEventListener('load', function() {
	    PasswordReset();
		});
	</script>

</body>
</html>
