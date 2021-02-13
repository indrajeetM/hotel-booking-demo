<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hotel</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
 	<style type="text/css">
	  	.overlay 
	  	{
	        background: rgb(239 239 239 / 0.5);
	        opacity: 1;
	        position: absolute;
	        top: 0;
	        left: 0;
	        bottom:0;
	        right:0;
	        z-index:5;
	        height: 350%;
		}

	    .loader {
	      position: relative;
	        top: 40%;
	        left: 45%;
	    }
	    .loader img{
	      border-radius: 50%;
	    }
	    .overlay-text{
	      position: relative;
	      top: 40%;
	      color: #000;
	    }

  </style>
</head>
<body>
<div class="overlay" style="display: block;">
    <div class="loader">
        <div class="" >
          <img src="<?php echo base_url(); ?>assets/imgs/loader-dark.gif" >
          <h4 class="d-flex justify-content-center" style="color: #fff" id="status"></h4>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-nav">
  <a class="navbar-brand title-font" href="<?php echo base_url(); ?>">HotelZone<br>
  <small class="title-font">Book Hotel in Few Clicks</small></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      	<?php 
        	if(isset($_SESSION['user_name']) &&!empty($_SESSION['user_name'])){
		?>
			<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle title-font" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Profile
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?php echo base_url(); ?>Home/Profile">Profile</a>
		          <a class="dropdown-item" href="<?php echo base_url(); ?>Home/logout">Logout</a>
		        </div>
		      </li>
		<?php
        	}else{
        ?>
        	<a class="nav-link title-font" href="<?php echo base_url(); ?>Home/LoginUser">Login</a>
        	
    	<?php } ?>
      </li>
    </ul>
  </div>
</nav>