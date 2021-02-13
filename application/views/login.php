<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid py-5 d-flex " style="">
	<div class="container">
     <?php 
          if($this->session->flashdata('login_error_msg')!=null && !empty($this->session->flashdata('login_error_msg'))){
            echo '<h3 class="red_color text-center">'.$this->session->flashdata('login_error_msg').'</h3>';
          }
      ?>
		<h5 class="text-center blue_color">Provide Your Details For Login</h5>
    <div class="row justify-content-center">
     
    		<form action="<?php echo base_url(); ?>Home/Authorized_Login" autocomplete="off" method="POST">
          <div class="form-row">
            <div class="col form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
            </div>
            
            <div class="col form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

          </div>
          <br/>
          <button class="btn bg-green-color white-text btn-md btn-register"  type="submit" name="login-form-btn">Login</button>
        </form>
      </div>
      <a class="" href="<?php echo base_url(); ?>" style="font-size: 1.25rem; float: right;">New Register</a>
	</div>
</div>