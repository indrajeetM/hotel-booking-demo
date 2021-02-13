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
<nav class="navbar navbar-light bg-nav navbar-expand-sm flex-nowrap align-items-start">
    <div class="d-flex flex-column">
        <div class="d-sm-flex d-block flex-nowrap">
            <a class=" title-font" href="<?php echo base_url(); ?>" style="font-size: 1.25rem;">HotelZone</a>

        </div>
        <small class="title-font">Book Hotel in Few Clicks</small>
        <?php 
        	if(isset($_SESSION['user_name']) &&!empty($_SESSION['user_name'])){
		?>
		<a class="" href="<?php echo base_url(); ?>Home/logout" style="font-size: 1.25rem;float: right;">Logout</a>
		<?php
        	}
        ?>
    </div>
</nav>