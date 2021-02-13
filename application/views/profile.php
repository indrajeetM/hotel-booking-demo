<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/momentjs/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

 <?php 
	if($this->session->flashdata('update_error_msg')!=null && !empty($this->session->flashdata('update_error_msg'))){
		echo '<h3 class="red_color text-center">'.$this->session->flashdata('update_error_msg').'</h3>';
	}
?>

<h5 class="text-center blue_color">Profile</h5>
<div class="row justify-content-center">
    

 	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item" role="presentation">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Basic Info</a>
	  </li>
	  <li class="nav-item" role="presentation">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile Image</a>
	  </li>
	  <li class="nav-item" role="presentation">
	    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Password</a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="justify-content-center tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	<form class="justify-content-center py-3" action="<?php echo base_url(); ?>Home/ProfileUpdate" method="POST" enctype="multipart/form-data" onsubmit="return ValidateForm()" autocomplete="off">
          <div class="row d-flex justify-content-center">
		    	<div class="form-group mx-3">
		    		<label for="first_name">First Name</label>
		    		<input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control px-5" value="<?php echo $profile[0]->first_name; ?>">
		    	</div>
		    	<div class="form-group mx-3">
		    		<label for="last_name">Last Name</label>
		    		<input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control px-5" value="<?php echo $profile[0]->last_name; ?>">
		    	</div>
		    	<div class="form-group mx-3">
		    		<label for="designation">Designation</label>
		    		<input type="text" name="designation" id="designation" placeholder="Designation" class="form-control px-5" value="<?php echo $profile[0]->designation; ?>">
		    	</div>
		    	<div class="form-group mx-3">
		    		<label for="date_of_birth">DOB</label>
		    		<input type="text" name="date_of_birth" id="date_of_birth" placeholder="Date Of Birth" class="form-control px-5 datepicker" value="<?php echo date('d-m-Y',strtotime($profile[0]->dob)) ?>">
		    	</div>
		    	<div class="form-group mx-3">
		    		<label for="email">Email</label>
		    		<input type="email" name="email" id="email" placeholder="Email Address" class="form-control px-5" value="<?php echo $profile[0]->email; ?>">
		    	</div>
		    	<div class="form-group mx-3">
		    		<label for="mobile">Mobile</label>
		    		<input type="text" name="mobile" id="mobile" placeholder="Mobile Number" class="form-control px-5" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10" autocomplete="off" onkeypress="return event.charCode >= 47 && event.charCode <= 57" onpaste="return false" value="<?php echo $profile[0]->mobile; ?>">
		    	</div>
    		</div>
          <br/>
          <div class="d-flex justify-content-center">
          	<button class="btn bg-green-color white-text btn-md btn-register "  type="submit" name="login-form-btn">Update Information</button>
          </div>
    	</form>
	  </div>
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	  	Working On
	  </div>
	  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Working On</div>
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
		
		return true;
	}
</script>