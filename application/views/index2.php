<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistem Jejaring Para Ahli</title>
<!--<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />-->
<link href="<?php echo base_url();?>assets/default.css" rel="stylesheet" type="text/css" />
<!--SCRIPTS-->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-form.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><img src="<?php echo base_url();?>/images/pic03.png" /></h1>
		</div>
		<div id="menu">
			<!--<ul>
				<li class="current_page_item"><a href="#" accesskey="1" title="">Master Karyawan</a></li>
				<li><a href="#" accesskey="2" title="">Master User</a></li>
				<li><a href="#" accesskey="3" title="">Master Group</a></li>
			</ul>-->
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="page-wrapper">
		<div>
			<?php echo (validation_errors()) ? validation_errors() : '' ?>
			<?php echo ($this->session->flashdata('message_error')) ? $this->session->flashdata('message_error') : '' ?>
		</div>
		<div id="page">
			<div id="wide-content">
				<div>
					<h2>Welcome to Knowledge Link PT. Petrokimia Gresik</h2>
					<p><img src="<?php echo base_url() ?>images/pic02.png" alt="" width="475" height="375" class="alignleft" />
						<form name="login-form" class="login-form" action="<?php echo site_url('login_admin/login_form'); ?>" method="post">

						<!--HEADER-->
		    			<div class="header">
		    			<!--TITLE--><h1>Login Form</h1><!--END TITLE-->
		    			<!--DESCRIPTION--><span>Masukkan username dan password anda.</span><!--END DESCRIPTION-->
		    			</div>
		    			<!--END HEADER-->
			
						<!--CONTENT-->
		    			<div class="content">
						<!--USERNAME--><input name="username" type="text" class="input username" value="" onfocus="this.value=''" /><!--END 		USERNAME-->
		    			<!--PASSWORD--><input name="password" type="password" class="input password" value="" onfocus="this.value=''" /><!--END PASSWORD-->
		    			</div>
		    			<!--END CONTENT-->
		    
		    			<!--FOOTER-->
		    			<div class="footer">
		    			<!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button" /><!--END LOGIN BUTTON-->
		    			</div>
		    			<!--END FOOTER-->

						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content">
			<div>
				<ul class="style1">
				</ul>
			</div>
		</div>
		<div id="sidebar">
			<ul class="style3">
			</ul>
		</div>
	</div>
</div>
<div id="footer" class="container">
	<p>Copyright (c) 2014 Sitename.com. All rights reserved. Design by Dody Yudha Prawira.</p>
</div>
</body>
</html>
