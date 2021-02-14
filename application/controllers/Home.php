<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Commonmodel');
		$this->load->library('common_library');
	}

	public function index(){
		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
		{
			redirect('Home/ViewHotels');
		}
		else{
			$this->load->view('header');
			$this->load->view('homepage');
			$this->load->view('footer');
		}
	}

	public function Register(){

		$first_name 		= $this->input->post('first_name');
		$last_name 			= $this->input->post('last_name');
		$designation 		= $this->input->post('designation');
		$DOB 				= $this->input->post('date_of_birth');
		$email 				= $this->input->post('email');
		$mobile 			= $this->input->post('mobile');
		$password 			= $this->input->post('password');
		$confirm_password 	= $this->input->post('confirm_password');
		$profile_image 		= $this->input->post('profile_image');
		
		/*validation Starts*/
		if(!isset($_FILES["profile_image"]) || empty($_FILES["profile_image"])){
			$this->session->set_flashdata('register_error_msg','No Profile Image Recieved');
			redirect('Home/');exit();
		}

		$post_array_check = array('first_name'=>'First Name',
								  'last_name'=>'Last Name',
								  'designation'=>'Designation',
								  'date_of_birth'=>'Date of Birth',
								  'email'=>'Email',
								  'mobile'=>'Mobile',
								  'password'=>'Password',
								  'confirm_password'=>'Confirm Password',);

		foreach ($post_array_check as $key => $value) {
			
			if (!array_key_exists($key,$_POST)){
				$this->session->set_flashdata('register_error_msg','Data '.$value.' Not Received.');
				redirect('Home/');exit();
			}
			if (empty($_POST[$key])|| trim($_POST[$key])==''){
				$this->session->set_flashdata('register_error_msg','Please Provide '.$value.'.');
				redirect('Home/');exit();
			}
			
		}
		if( strlen( $first_name) >50)
		{
			$this->session->set_flashdata('register_error_msg','Please Provide First Name With 50 Characters');
			redirect('Home/');exit();
		}

		if( strlen( $last_name) >50){

			$this->session->set_flashdata('register_error_msg','Please Provide Last Name With 50 Characters');
			redirect('Home/');exit();
		}
		if( strlen( $designation) >50){

			$this->session->set_flashdata('register_error_msg','Please Provide Designation With 50 Characters');
			redirect('Home/');exit();
		}
		if( strlen( $email) >100)
		{

			$this->session->set_flashdata('register_error_msg','Please Provide Email With 100 Characters');
			redirect('Home/');exit();
		}
		if( strlen( $mobile) < 10 || strlen( $mobile) >10)
		{

			$this->session->set_flashdata('register_error_msg','Please Provide Valid Mobile Number With 10 Digits');
			redirect('Home/');exit();
		}
		if( strlen( $password) >255)
		{

			$this->session->set_flashdata('register_error_msg','Please Provide Passwors With 250 Characters');
			redirect('Home/');exit();
		}
		/*validation Ends*/


		
		/*upload file*/
		$dates			= date('d-m-Yh-i-s');
		$profile 		= './uploads';

		if(!file_exists($profile)){
			$a=mkdir($profile, 0701);
		}

		$img_name		= $_FILES["profile_image"]["name"];
		$file_parts 	= pathinfo($img_name);
		$extension 		= $file_parts['extension'];

		$config['upload_path']      = $profile.'/';
        $config['allowed_types']    = 'jpg|jpeg';
        $config['file_name']		= $dates."_profile.".$extension;

        

        $this->load->library('upload', $config);
       	$this->upload->initialize($config);
	 	if ( ! $this->upload->do_upload("profile_image"))
        {
        	$this->session->set_flashdata('register_error_msg','Failed To Upload Profile Image. Try Again.');
			redirect('Home/');exit();
        }

        $db_data['first_name'] 			= $first_name;
		$db_data['last_name'] 			= $last_name;
		$db_data['designation'] 		= $designation;
		$db_data['dob'] 				= date('Y-m-d',strtotime($DOB));
		$db_data['email'] 				= $email;
		$db_data['mobile'] 				= $mobile;
		$db_data['password'] 			= md5($password);
		$db_data['profile_image'] 		= $config['upload_path'].$config['file_name'];

		$insert_result = $this->Commonmodel->insert_register($db_data);
		if($insert_result)
		{
			$this->session->set_flashdata('register_error_msg','Registration Successful.');
			redirect('Home/');exit();
		}else{
			$this->session->set_flashdata('register_error_msg','Failed To Register. Try Again.');
			redirect('Home/');exit();
		}
		
	}

	public function LoginUser(){
		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
		{
			redirect('Home/ViewHotels');
		}else{
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
	}

	public function Authorized_Login(){

		$email 		= $this->input->post('email');
		$password 	= $this->input->post('password');

		if(!isset($email) || empty($email)){
			$this->session->set_flashdata('login_error_msg','No Email Address Recieved');
			redirect('Home/LoginUser');exit();
		}
		if(!isset($password) || empty($password)){
			$this->session->set_flashdata('login_error_msg','No Password Recieved');
			redirect('Home/LoginUser');exit();
		}
		$password = md5($password);

		$chek_user =  $this->Commonmodel->get_authorized_users($email,$password);
		if(!empty($chek_user)){
			$this->session->set_userdata(array(
                'user_id'  		=> $chek_user[0]->id,
                'user_name'  	=> $chek_user[0]->first_name. ' '.$chek_user[0]->first_name,
            ));
            redirect('Home/ViewHotels');
		}else{
			$this->session->set_flashdata('login_error_msg','Username or Password Did Not Match');
			redirect('Home/LoginUser');exit();
		}
	}

	public function ViewHotels(){
		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
		{
			$sort_type 	= $this->input->get('sort_type');
			$sort_value = $this->input->get('sort_value');

			if(isset($sort_type) && isset($sort_value) && !empty($sort_type) && !empty($sort_value)){

			}else{
				$sort_type = "id";
				$sort_value = "asc";
			}

			$hotel_result 		= $this->Commonmodel->get_hotel($sort_type,$sort_value);
			
			$data['list'] 		= $hotel_result;
			$data['sort_type'] 	= $sort_type;
			$data['sort_value'] = $sort_value;

			$this->load->view('header');
			$this->load->view('hotel_list',$data);
			$this->load->view('footer');

		}else{
			$this->session->set_flashdata('login_error_msg','Please Login.');
			redirect('Home/LoginUser');exit();
		}
	}

	public function readHotel(){

		$c  = 1;
		$hotels = $this->common_library->ReadHotelList();
		foreach ($hotels['result'] as $key => $value) {
			$hotel_id 				= $value['hotel_id'];
			$hotel_name 			= $value['hotel_name'];
			$address 				= $value['address'];
			$stars 					= isset($value['stars'])?$value['stars']:'0';
			$price 					= $value['price'];
			$photo 					= $value['photo'];
			$hotel_currency_code 	= $value['hotel_currency_code'];
			$price 					= $value['price'];
			$hotel_amenities 		= json_encode($value['hotel_amenities']);

			$db_data['hotel_id'] 		= $hotel_id;
			$db_data['hotel_name'] 		= $hotel_name;
			$db_data['address'] 		= $address;
			$db_data['starts'] 			= $stars;
			$db_data['price'] 			= $price;
			$db_data['photo'] 			= $photo;
			$db_data['hotel_cur_code'] 	= $hotel_currency_code;
			$db_data['amenities'] 		= $hotel_amenities;
			$insert_result 				= $this->Commonmodel->insert_hotel($db_data);
			if($insert_result){
				$c++;
			}
		}
	}

	public function ViewHotelDetails(){

		$post_hotel_id = $this->input->post('hotel_id');
		
		if(empty($post_hotel_id)){
			redirect('Home/ViewHotels');exit();
		}

		$hotels = $this->common_library->ReadHotelList();
		$found_index = array_search($post_hotel_id, array_column($hotels['result'], 'hotel_id'));
		if ($found_index !== FALSE){
			$hotel_id 				= $hotels['result'][$found_index]['hotel_id'];
			$hotel_name 			= $hotels['result'][$found_index]['hotel_name'];
			$address 				= $hotels['result'][$found_index]['address'];
			$stars 					= isset($hotels['result'][$found_index]['stars'])?$hotels['result'][$found_index]['stars']:'0';
			$price 					= $hotels['result'][$found_index]['price'];
			$photo 					= $hotels['result'][$found_index]['photo'];
			$hotel_currency_code 	= $hotels['result'][$found_index]['hotel_currency_code'];
			$price 					= $hotels['result'][$found_index]['price'];
			$hotel_amenities 		= $hotels['result'][$found_index]['hotel_amenities'];

			$db_data['hotel_id'] 		= $hotel_id;
			$db_data['hotel_name'] 		= $hotel_name;
			$db_data['address'] 		= $address;
			$db_data['starts'] 			= $stars;
			$db_data['price'] 			= $price;
			$db_data['photo'] 			= $photo;
			$db_data['hotel_cur_code'] 	= $hotel_currency_code;
			$db_data['amenities'] 		= $hotel_amenities;

			$data['value'] = $db_data;
			$this->load->view('header');
			$this->load->view('hotel_view_details',$data);
			$this->load->view('footer');

		}else{
			redirect('Home/ViewHotels');exit();
		}

	}

/*	public function SortData(){
		$sort_type 	= $this->input->get('sort_type');
		$sort_value = $this->input->get('sort_value');

		$hotel_result = $this->Commonmodel->get_hotel_data($sort_type,$sort_value);
		$data['list'] = $hotel_result;
		$this->load->view('header');
		$this->load->view('hotel_list',$data);
		$this->load->view('footer');
	}*/

	public function Profile(){
		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
		{
			$profile_id = $_SESSION['user_id'];
			$get_profile_info = $this->Commonmodel->get_profile($profile_id);
			if(!empty($get_profile_info)){
				$data['profile'] = $get_profile_info;
			}else{
				$data['profile'] = array();
			}
			$this->load->view('header');
			$this->load->view('profile',$data);
			$this->load->view('footer');
		}else{
			$this->session->set_flashdata('login_error_msg','Please Login.');
			redirect('Home/LoginUser');exit();
		}
	}

	public function ProfileUpdateBasic(){
		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){

			$first_name 		= $this->input->post('first_name');
			$last_name 			= $this->input->post('last_name');
			$designation 		= $this->input->post('designation');
			$DOB 				= $this->input->post('date_of_birth');
			$email 				= $this->input->post('email');
			$mobile 			= $this->input->post('mobile');

			$post_array_check = array('first_name'=>'First Name',
									  'last_name'=>'Last Name',
									  'designation'=>'Designation',
									  'date_of_birth'=>'Date of Birth',
									  'email'=>'Email',
									  'mobile'=>'Mobile');

			foreach ($post_array_check as $key => $value) {
				
				if (!array_key_exists($key,$_POST)){
					$this->session->set_flashdata('update_error_msg','Data '.$value.' Not Received.');
					redirect('Home/Profile');exit();
				}
				if (empty($_POST[$key])|| trim($_POST[$key])==''){
					$this->session->set_flashdata('update_error_msg','Please Provide '.$value.'.');
					redirect('Home/');exit();
				}
				
			}
			if( strlen( $first_name) >50)
			{
				$this->session->set_flashdata('update_error_msg','Please Provide First Name With 50 Characters');
				redirect('Home/Profile');exit();
			}

			if( strlen( $last_name) >50){

				$this->session->set_flashdata('update_error_msg','Please Provide Last Name With 50 Characters');
				redirect('Home/Profile');exit();
			}
			if( strlen( $designation) >50){

				$this->session->set_flashdata('update_error_msg','Please Provide Designation With 50 Characters');
				redirect('Home/Profile');exit();
			}
			if( strlen( $email) >100)
			{

				$this->session->set_flashdata('update_error_msg','Please Provide Email With 100 Characters');
				redirect('Home/Profile');exit();
			}
			if( strlen( $mobile) < 10 || strlen( $mobile) >10)
			{

				$this->session->set_flashdata('update_error_msg','Please Provide Valid Mobile Number With 10 Digits');
				redirect('Home/Profile');exit();
			}
			/*validation Ends*/

		  	$db_data['first_name'] 			= $first_name;
			$db_data['last_name'] 			= $last_name;
			$db_data['designation'] 		= $designation;
			$db_data['dob'] 				= date('Y-m-d',strtotime($DOB));
			$db_data['email'] 				= $email;
			$db_data['mobile'] 				= $mobile;
			
			$update_id 		= $_SESSION['user_id'];
			$insert_result 	= $this->Commonmodel->update_profile($update_id,$db_data);
			if($insert_result)
			{
				$this->session->set_flashdata('update_error_msg','Update Successful.');
				redirect('Home/Profile');exit();
			}else{
				$this->session->set_flashdata('update_error_msg','Failed To Update. Try Again.');
				redirect('Home/Profile');exit();
			}
		}else{
			$this->session->set_flashdata('login_error_msg','Please Login.');
			redirect('Home/LoginUser');exit();
		}
	}

	public function ProfileUpdateImage(){
		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
		{
			/*validation Starts*/
			if(!isset($_FILES["profile_image"]) || empty($_FILES["profile_image"])){
				$this->session->set_flashdata('update_error_msg','No Profile Image Recieved');
				redirect('Home/ProfileUpdateImage');exit();
			}

			/*upload file*/
			$dates			= date('d-m-Yh-i-s');
			$profile 		= './uploads';

			if(!file_exists($profile)){
				$a=mkdir($profile, 0701);
			}

			$img_name		= $_FILES["profile_image"]["name"];
			$file_parts 	= pathinfo($img_name);
			$extension 		= $file_parts['extension'];

			$config['upload_path']      = $profile.'/';
	        $config['allowed_types']    = 'jpg|jpeg';
	        $config['file_name']		= $dates."_profile.".$extension;

	        

	        $this->load->library('upload', $config);
	       	$this->upload->initialize($config);
		 	if ( ! $this->upload->do_upload("profile_image"))
	        {
	        	$this->session->set_flashdata('register_error_msg','Failed To Upload Profile Image. Try Again.');
				redirect('Home/');exit();
	        }

			$db_data['profile_image'] 	= $config['upload_path'].$config['file_name'];
			$update_id 					= $_SESSION['user_id'];

			$get_result 	= $this->Commonmodel->get_profile($update_id);
			$insert_result 	= $this->Commonmodel->update_profile($update_id,$db_data);
			if($insert_result)
			{
				if(file_exists($get_result[0]->profile_image)){
					unlink($get_result[0]->profile_image);
				}
				$this->session->set_flashdata('update_error_msg','Profile Image Update Successful.');
				redirect('Home/Profile');exit();
			}else{
				$this->session->set_flashdata('update_error_msg','Failed To Update. Try Again.');
				redirect('Home/Profile');exit();
			}
		}else{
			$this->session->set_flashdata('login_error_msg','Please Login.');
			redirect('Home/LoginUser');exit();
		}
	}


	public function ProfileUpdatePassword(){
		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
			/*validation Ends*/
			$current_password 		= $this->input->post('current_password');
			$new_password 			= $this->input->post('new_password');
			$confirm_password 		= $this->input->post('confirm_password');

			$post_array_check = array('current_password'=>'Current Password',
									  'new_password'=>'New Password',
									  'confirm_password'=>'Confirm Password');

			foreach ($post_array_check as $key => $value) {
				
				if (!array_key_exists($key,$_POST)){
					$this->session->set_flashdata('update_error_msg','Data '.$value.' Not Received.');
					redirect('Home/Profile');exit();
				}
				if (empty($_POST[$key])|| trim($_POST[$key])==''){
					$this->session->set_flashdata('update_error_msg','Please Provide '.$value.'.');
					redirect('Home/');exit();
				}
				
			}
			if( strlen( $current_password) >250)
			{
				$this->session->set_flashdata('update_error_msg','Please Provide  Current Password With 250 Characters');
				redirect('Home/Profile');exit();
			}

			if( strlen( $new_password) >250){

				$this->session->set_flashdata('update_error_msg','Please Provide New Password With 250 Characters');
				redirect('Home/Profile');exit();
			}
			if( strlen( $confirm_password) >250){

				$this->session->set_flashdata('update_error_msg','Please Provide Confirm Password With 250 Characters');
				redirect('Home/Profile');exit();
			}
			/*validation Ends*/

			$update_id 		= $_SESSION['user_id'];
			$get_result 	= $this->Commonmodel->get_profile($update_id);
			if(empty($get_result))
			{
				$this->session->set_flashdata('login_error_msg','Please Login. Session Expired.');
				redirect('Home/LoginUser');exit();
			}
			if($get_result[0]->password!=md5($current_password))
			{
				$this->session->set_flashdata('update_error_msg','Your Current Password Do Not Match');
				redirect('Home/Profile');exit();
			}

		  	$db_data['password'] 			= md5($confirm_password);
			
			$update_id 		= $_SESSION['user_id'];
			$insert_result  = $this->Commonmodel->update_profile($update_id,$db_data);
			if($insert_result)
			{
				$this->session->unset_userdata('user_id');
        		$this->session->unset_userdata('user_name');
				$this->session->set_flashdata('login_error_msg','Password Updated Successfuly. Please Login.');
				redirect('Home/LoginUser');exit();
			}else{
				$this->session->set_flashdata('update_error_msg','Failed To Update. Try Again.');
				redirect('Home/Profile');exit();
			}
		}else{
			$this->session->set_flashdata('login_error_msg','Please Login.');
			redirect('Home/LoginUser');exit();
		}
	}

	public function logout(){
		$this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
		redirect('Home/');
	}
}
