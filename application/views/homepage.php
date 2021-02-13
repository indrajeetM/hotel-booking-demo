<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/momentjs/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<div class="container-fluid " style="padding-right: 0px;padding-left: 0px">
    <div class="bg-home-background">
    	<a class=" title-font" href="<?php echo base_url(); ?>Home/LoginUser" style="font-size: 1.25rem; float: right;">Login</a>
    	<div class="row justify-content-center py-5">
    		
	    	<form class="col-md-6 col-lg-6 col-sm-12 py-3" action="<?php echo base_url(); ?>Home/Register" method="POST" enctype="multipart/form-data" onsubmit="return ValidateForm()" autocomplete="off">
	    		
	    		<?php 
	    			if($this->session->flashdata('register_error_msg')!=null && !empty($this->session->flashdata('register_error_msg'))){
	    				echo '<p>'.$this->session->flashdata('register_error_msg').'</p>';
	    			}
    		 	?>

	    		<div class="row justify-content-center">
			    	<div class="form-group mx-3">
			    		<label for="first_name">First Name</label>
			    		<input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control px-5">
			    	</div>
			    	<div class="form-group mx-3">
			    		<label for="last_name">Last Name</label>
			    		<input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control px-5">
			    	</div>
			    	<div class="form-group mx-3">
			    		<label for="designation">Designation</label>
			    		<input type="text" name="designation" id="designation" placeholder="Designation" class="form-control px-5">
			    	</div>
			    	<div class="form-group mx-3">
			    		<label for="date_of_birth">DOB</label>
			    		<input type="text" name="date_of_birth" id="date_of_birth" placeholder="Date Of Birth" class="form-control px-5 datepicker">
			    	</div>
			    	<div class="form-group mx-3">
			    		<label for="email">Email</label>
			    		<input type="email" name="email" id="email" placeholder="Email Address" class="form-control px-5">
			    	</div>
			    	<div class="form-group mx-3">
			    		<label for="mobile">Mobile</label>
			    		<input type="text" name="mobile" id="mobile" placeholder="Mobile Number" class="form-control px-5" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10" autocomplete="off" onkeypress="return event.charCode >= 47 && event.charCode <= 57" onpaste="return false">
			    	</div>
			    	<div class="form-group mx-3">
			    		<label for="password">Password</label>
			    		<input type="password" name="password" id="password" placeholder="Password" class="form-control px-5">
			    	</div>
			    	<div class="form-group mx-3">
			    		<label for="confirm_password">Confirm Password</label>
			    		<input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control px-5">
			    	</div>
			    	<div class="form-group mx-3">
			    		<label for="profile_image">Profile Image</label>
			    		<input type="file" name="profile_image" id="profile_image" class="form-control px-5">
			    	</div>
	    		</div>
			    	<button class="btn btn-md orange_color text-white" type="submit" name="register-form-btn">Register</button>
	    	</form>
    	</div>
    </div>
</div>

<script type="text/javascript">
$('.datepicker').bootstrapMaterialDatePicker({
    format: 'DD-MM-YYYY',
    clearButton: true,
    weekStart: 1,
    time: false,
    minDate : new Date('1947-01-01'),
    maxDate:new Date()
});

	function ValidateForm(){
		var first_name 			= $('#first_name').val();
		var last_name 			= $('#last_name').val();
		var designation 		= $('#designation').val();
		var DOB 				= $('#date_of_birth').val();
		var email 				= $('#email').val();
		var mobile 				= $('#mobile').val();
		var password 			= $('#password').val();
		var confirm_password 	= $('#confirm_password').val();
		var profile_image 		= $('#profile_image').val();

		var regex_email     = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/;
        var regex_mobile    = /^[6789]{1}[0-9]{9}$/;
        var regex_text    	= /^[a-zA-Z]+$/;

		if(first_name.trim()=='' || first_name.trim()==undefined){
			alert("Please Provide First Name");
			$('#first_name').focus();
			return false;
		}
		if(!regex_text.test(first_name)) {
         	alert("Please Add Valid First Name");
			$('#first_name').focus()
			return false;
	    }
		if(last_name.trim()=='' || last_name.trim()==undefined){
			alert("Please Provide Last Name");
			$('#last_name').focus();
			return false;
		}
		if(!regex_text.test(last_name)) {
         	alert("Please Add Valid Last Name");
			$('#last_name').focus()
			return false;
	    }
		if(designation.trim()=='' || designation.trim()==undefined){
			alert("Please Provide Designation");
			$('#designation').focus();
			return false;
		}
		if(!regex_text.test(designation)) {
         	alert("Please Add Valid Designation");
			$('#designation').focus()
			return false;
	    }
		if(DOB.trim()=='' || DOB.trim()==undefined){
			alert("Please Provide Date of Birth");
			$('#date_of_birth').focus();
			return false;
		}
		if(email.trim()=='' || email.trim()==undefined){
			alert("Please Provide Email");
			$('#email').focus();
			return false;
		}
		if(mobile.trim()=='' || mobile.trim()==undefined){
			alert("Please Provide Mobile Number");
			$('#mobile').focus();
			return false;
		}
		if(!regex_mobile.test(mobile)) {
         	alert("Please Add Valid Mobile Number");
			$('#mobile').focus()
			return false;
	    }
		if(password.trim()=='' || password.trim()==undefined){
			alert("Please Provide Password");
			$('#password').focus();
			return false;
		}
		if(confirm_password.trim()=='' || confirm_password.trim()==undefined){
			alert("Please Provide Confirm Password");
			$('#confirm_password').focus();
			return false;
		}
		if(password!=confirm_password){
			alert("Password And Confirm Password Does Not Match");
			$('#password').val('');
			$('#password').focus();
			$('#confirm_password').val('');
			return false;
		}
		if(profile_image.trim()=='' || profile_image.trim()==undefined){
			alert("Please Provide Profile Image");
			$('#profile_image').focus();
			return false;
		}
		if(profile_image!=''){
			var img_props 	 = document.getElementById("profile_image"); 
			var allowedFiles = [".jpg", ".jpeg", ".JPEG",".JPG"];
			var img_check	 = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
			if (!img_check.test(profile_image.toLowerCase()))
	        {
				alert("Please Provide Valid Profile Image\nType JPG or JPEG");
				$('#profile_image').val('');
				$('#profile_image').focus();
				return false;
			}
			if(img_props.files[0].size >= 3149515)
        	{
        		alert("Please Provide Valid Profile Image\nUpload Only Below 3MB!");
	    		$('#profile_image').val('');
				$('#profile_image').focus();
	          	return false;
		    }
		}
		return true;
	}
</script>