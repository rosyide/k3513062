<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	
<!-- Mirrored from www.cliptheme.com/demo/rapido/login_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Nov 2014 00:37:27 GMT -->
<head>
		<title>Login FOSS</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/plugins/animate.css/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/styles.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/styles-responsive.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/plugins/iCheck/skins/all.css">
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			
				<!-- start: LOGIN BOX -->
				<div class="box-login">
					<h3>Halaman Login Foss CI</h3>
									 <?php 
            if($this->input->get('gagal')==1){
        ?>
        <h3 font-color='red'>Username atau Password salah</font></h3>
        <?php
            }
        ?>
					<p>
					Masukan <b>Username</b> Dan <b>Password Anda...</b>
					</p>

					 <?php echo form_open('login_validation'); ?>
					 <div class = "form-login">
						<div class="errorHandler alert alert-danger no-display">
							<i class="fa fa-remove-sign"></i> ERROR Masukan Username Dan Password yang BENAR!
						</div>
						<fieldset>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-green pull-right">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							
						</fieldset>
				
					</div>
					 
					 <?php echo form_close(); ?> 
					 
	
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						2014-2015 &copy; PTIK 2013. FOSS.
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: LOGIN BOX -->
			
		
			</div>
		</div>
		<br>
		<br>
		<br>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="<?php echo base_url(); ?>assets2/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<script src="<?php echo base_url(); ?>assets2/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets2/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets2/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="<?php echo base_url(); ?>assets2/plugins/jquery.transit/jquery.transit.js"></script>
		<script src="<?php echo base_url(); ?>assets2/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<script src="<?php echo base_url(); ?>assets2/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo base_url(); ?>assets2/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets2/js/login.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/login_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Nov 2014 00:37:37 GMT -->
</html>