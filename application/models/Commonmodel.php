<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Common DB function
	 */
	class Commonmodel extends CI_Model
	{
	    public function __construct()
	    {
	       parent::__construct(); 
	    }

	  /* INSERT INTO User table*/
	    function insert_register($data)
	    {
	        
         	$count_query = $this->db->insert('tbl_users',$data);
			
            if (isset($count_query)) {
                return 1;
            }else{
            	return 0;
            }
	        
	    }

	  /* INSERT INTO Hotel table*/
	    function insert_hotel($data)
	    {
	        
         	$count_query = $this->db->insert('tbl_hotel_list',$data);
			
            if (isset($count_query)) {
                return 1;
            }else{
            	return 0;
            }
	        
	    }

	    /*CHECK user name and password for login*/
    	public function get_authorized_users($usrname,$pswd){
			$this->db->select('*');
			$this->db->where('email', $usrname);
			$this->db->where('password', $pswd);
			$query = $this->db->get('tbl_users');
			$response = $query->result();
			
			if(isset($response) && !empty($response)){
				return $response;
			}else{
				return 0;
			}

		}
		
	    /*CHECK user data for prfile section*/
    	public function get_profile($usr_id){
			$this->db->select('*');
			$this->db->where('id', $usr_id);
			$query = $this->db->get('tbl_users');
			$response = $query->result();
			
			if(isset($response) && !empty($response)){
				return $response;
			}else{
				return 0;
			}

		}

	    /*Update user data*/
    	public function update_profile($usr_id,$data){
			
			$this->db->where('id', $usr_id);
			$this->db->update('tbl_users',$data);
			$result =  $this->db->affected_rows();
			
			if($result){
				return 1;
			}else{
				return 0;
			}

		}

	    /*GET Hotels*/
    	public function get_hotel(){
			$this->db->select('*');
			
			$query = $this->db->get('tbl_hotel_list');
			$response = $query->result();
			
			if(isset($response) && !empty($response)){
				return $response;
			}else{
				return 0;
			}

		}
	    /*GET Hotels*/
    	public function get_hotel_data($sort_col,$sort_type){
			$this->db->select('*');
			
			$this->db->order_by($sort_col, $sort_type);
			$query = $this->db->get('tbl_hotel_list');
			$response = $query->result();
			
			if(isset($response) && !empty($response)){
				return $response;
			}else{
				return 0;
			}

		}

	  

	}
?>