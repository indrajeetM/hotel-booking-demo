<?php 

	defined('BASEPATH') OR exit('No Direct Script Is Allowed');

	class Common_Library{
		
		public function ReadHotelList(){

			$hotel_list = file_get_contents("./assets/hotelAvailability_Response.json");
			$hotel_list_decode = json_decode($hotel_list,true);
			return $hotel_list_decode;
			
		}
	}

?>
