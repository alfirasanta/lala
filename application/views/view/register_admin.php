<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets')?>/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('assets')?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets')?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets')?>/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login" action="<?php echo base_url('/Login/tambah_user'); ?>" method="post">
		        <h2 class="form-login-heading">sign up now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Username" name="username" id="username" autofocus>
                <br>
                <input type="text" class="form-control" placeholder="Name" name="nama_user" id="name" autofocus>
		            <br>
                <input type="password" class="form-control" placeholder="Password" id="username" name="password">
                <br>
                <select name="level" class="form-control">Level
                <option value="Admin">Admin</option>
</select>
		            <label class="checkbox">
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN UP</button>
		            <hr>
                <div class="registration">
                    <a class="" href="<?= base_url('Login/index')?>">
                    I have an account
		                </a>
                </div>
                <?php
                if($this->session->flashdata('psn')!= null){
                echo"<div class='alert alert-danger' style='width:300px'>".$this->session->flashdata('psn')."</div";
                }?>
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets')?>/js/jquery.js"></script>
    <script src="<?= base_url('assets')?>/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?= base_url('assets')?>/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?= base_url('assets')?>/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
