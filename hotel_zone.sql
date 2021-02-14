-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 02:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_zone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_list`
--

CREATE TABLE `tbl_hotel_list` (
  `id` int(11) NOT NULL,
  `hotel_id` bigint(20) DEFAULT NULL,
  `hotel_name` varchar(150) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `starts` varchar(10) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `hotel_cur_code` varchar(100) DEFAULT NULL,
  `amenities` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hotel_list`
--

INSERT INTO `tbl_hotel_list` (`id`, `hotel_id`, `hotel_name`, `address`, `starts`, `price`, `photo`, `hotel_cur_code`, `amenities`) VALUES
(1, 257694, 'Sage Hotel Wollongong', '60-62 Harbour Street, Wollongong', '4.5', 386.75, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul0zA3dxFLcGVYWtCWpVl_SmHx_W3huseOdhOfmvHJRyZM4NJwfEG7HRlxbaLlXSaeoHVdtNLmvEJbb53JDauuF_qYYX3g5HXSult8y7WjxMa_7gOBINUKLIeYebC7Y.jpg', 'AUD', '[\"paid_parking\",\"restaurant\",\"meeting_facilities\",\"bar\",\"24_hour_front_desk\",\"fitness_room\",\"golf_course_close_by\",\"non_smoking_rooms\",\"business_center\",\"facilities_for_disabled\",\"internet_services\",\"elevator\",\"luggage_storage\",\"wireless_lan\",\"swimmingpool_outdoor\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"outdoor_swimming_pool_all_year\",\"trouser_press\",\"daily_maid_service\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"wheelchair_accessible\",\"swimming_pool\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"social_distancing_in_dining_areas\",\"staff_follows_safety_measures\",\"stationery_removed\",\"hand_sanitizers_available\",\"first_aid_kit_available\",\"contactless_checkin\",\"cashless_payments\",\"social_distancing\",\"professional_cleaning\",\"sanitized_dinnerware\",\"optional_cleaning\"]'),
(2, 37961, 'Adina Apartment Hotel Wollongong', '19 Market Street, Wollongong', '4.5', 493.20, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul2U0T7wgVdGcw9GnISzKcquD5gF-rs71qiJTTPbO31_VjsnWEGQpjk9xtD1mjX0abtql7fkW7WCuEkYu8RedAi1kRT3-O9_IR8y2c99H-wRlMyZq8_Bhy0oCahrZfs.jpg', 'AUD', '[\"paid_parking\",\"meeting_facilities\",\"bar\",\"24_hour_front_desk\",\"sauna\",\"fitness_room\",\"golf_course_close_by\",\"non_smoking_rooms\",\"fishing\",\"facilities_for_disabled\",\"family_rooms\",\"internet_services\",\"elevator\",\"hiking\",\"horse_riding\",\"luggage_storage\",\"wireless_lan\",\"swimmingpool_outdoor\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"outdoor_swimming_pool_all_year\",\"daily_maid_service\",\"grocery_deliveries\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"swimming_pool\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"rooms_sealed_after_cleaning\",\"social_distancing_in_dining_areas\",\"in_room_dining\",\"staff_follows_safety_measures\",\"stationery_removed\",\"hand_sanitizers_available\",\"first_aid_kit_available\",\"cashless_payments\",\"social_distancing\",\"professional_cleaning\",\"sanitized_dinnerware\",\"optional_cleaning\"]'),
(3, 320658, 'Best Western City Sands', 'Cnr Bank & Corrimal Street, Wollongong', '4', 585.65, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul0zA3dxFLcGVVIGShSUlB9bVQN_GLyYKUKgi2gjyhVqupqtREjo5viogqIgSiBR7P5Wuxx0gNEUA91m8TpAf4e4e4HlnGYKH4yDrS6ycsqhsztcFrRdduJ0HQtH0u0.jpg', 'AUD', '[\"paid_parking\",\"restaurant\",\"meeting_facilities\",\"bar\",\"golf_course_close_by\",\"garden\",\"non_smoking_rooms\",\"facilities_for_disabled\",\"family_rooms\",\"casino\",\"free_parking\",\"internet_services\",\"elevator\",\"luggage_storage\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"wheelchair_accessible\"]'),
(4, 37571, 'Mantra Wollongong', '6-10 Gladstone Avenue, Wollongong', '4.5', 538.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul2U0T7wgVdGc9lc2z_4UZJSBigCuimejWco46RTNWxZGWcdXi_XHZeTbWQe4IUIRrU4NIgL78bgD-VdQubPW3Z-xhhfcjVgffw5VD6x2CR_bMjpaniLAK0h3u9DeWI.jpg', 'AUD', '[\"paid_parking\",\"golf_course_close_by\",\"non_smoking_rooms\",\"fishing\",\"facilities_for_disabled\",\"family_rooms\",\"internet_services\",\"elevator\",\"bowling\",\"diving\",\"horse_riding\",\"luggage_storage\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"aqua_park\",\"parking_on_site\",\"wifi_everywhere\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"rooms_sealed_after_cleaning\",\"social_distancing_in_dining_areas\",\"in_room_dining\",\"staff_follows_safety_measures\",\"stationery_removed\",\"hand_sanitizers_available\",\"health_check_available\",\"first_aid_kit_available\",\"cashless_payments\",\"social_distancing\",\"separators\",\"professional_cleaning\",\"sanitized_dinnerware\",\"optional_cleaning\",\"covered_food_delivery\",\"access_to_health_care_professional\",\"thermometers_available\",\"free_face_masks\"]'),
(5, 1195077, 'Nightcap at the Charles Hotel', '98 Princes Highway, Wollongong', '3.5', 347.70, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul0zA3dxFLcGVZk7Qy__3irSLMcbkIDblBo9tBFtPp4YzfP0bh089kcLVuRemChBj3P854XikjeMfHLS2iiA6fIF83XOjKiEWabK5cOjjMTwfVvnAZEb_w2tu4P4Mus.jpg', 'AUD', '[\"paid_parking\",\"restaurant\",\"bar\",\"non_smoking_rooms\",\"free_parking\",\"internet_services\",\"luggage_storage\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"rooms_sealed_after_cleaning\",\"social_distancing_in_dining_areas\",\"in_room_dining\",\"staff_follows_safety_measures\",\"stationery_removed\",\"hand_sanitizers_available\",\"health_check_available\",\"first_aid_kit_available\",\"contactless_checkin\",\"cashless_payments\",\"social_distancing\",\"separators\",\"sanitized_dinnerware\",\"optional_cleaning\",\"breakfast_takeaway_boxes\",\"covered_food_delivery\"]'),
(6, 5443229, 'Coniston Hotel Wollongong', '28 Bridge Street, Wollongong', '4', 359.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul0zA3dxFLcGVbTOQiQZGCl69QwY_IR3JvRDXeXzAHAFrPDgC9VWP5g87YnaDcOwVHjYaFdVD8wT2-DKUzoZGNY1MfWfwEQVYnMpHL7-Df8Mju3g6JY9Sc_D743fg64.jpg', 'AUD', '[\"paid_parking\",\"restaurant\",\"meeting_facilities\",\"bar\",\"non_smoking_rooms\",\"facilities_for_disabled\",\"family_rooms\",\"free_parking\",\"internet_services\",\"elevator\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"air_conditioning\",\"evening_entertainment\",\"daily_maid_service\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"wheelchair_accessible\"]'),
(7, 366962, 'Quality Suites Pioneer Sands', '19 Carters Lane, Wollongong', '4', 440.30, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul0zA3dxFLcGVXL3YzENPrkHs3Dp8pggWf9GR7Nc1A8e01paRwwAsS5GDtMTA3pkwnuDFa5TRqsN9V-Ws2H2jq1oDaiM9QUrlX6ZLdfx-T1yq6i6jtdAiPC-H-pY8OE.jpg', 'AUD', '[\"paid_parking\",\"meeting_facilities\",\"bar\",\"fitness_room\",\"garden\",\"non_smoking_rooms\",\"facilities_for_disabled\",\"family_rooms\",\"free_parking\",\"internet_services\",\"elevator\",\"luggage_storage\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"daily_maid_service\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"social_distancing_in_dining_areas\",\"in_room_dining\",\"staff_follows_safety_measures\",\"hand_sanitizers_available\",\"health_check_available\",\"first_aid_kit_available\",\"cashless_payments\",\"social_distancing\",\"separators\",\"sanitized_dinnerware\",\"optional_cleaning\"]'),
(8, 35569, 'Novotel Wollongong Northbeach', '2-14 Cliff Road, Wollongong', '4.5', 593.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul2U0T7wgVdGc82FEVNTKC109yqwHYRaeb3wjZCIAeLsa7z4Be9NuYm7AGINm7avuilLdOGBOtnoUblc-be5FV96B7YPQ3D1vKHi2ukVoI_XoRFAnHOKQbOPTsAehms.jpg', 'AUD', '[\"paid_parking\",\"restaurant\",\"meeting_facilities\",\"bar\",\"24_hour_front_desk\",\"sauna\",\"fitness_room\",\"golf_course_close_by\",\"non_smoking_rooms\",\"babysitting_child_services\",\"facilities_for_disabled\",\"family_rooms\",\"internet_services\",\"elevator\",\"spa_wellness_centre\",\"massage\",\"hiking\",\"luggage_storage\",\"wireless_lan\",\"swimmingpool_outdoor\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"outdoor_swimming_pool_all_year\",\"beach_front\",\"evening_entertainment\",\"daily_maid_service\",\"parking_on_site\",\"paid_wifi\",\"wheelchair_accessible\",\"swimming_pool\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"social_distancing_in_dining_areas\",\"in_room_dining\",\"staff_follows_safety_measures\",\"stationery_removed\",\"hand_sanitizers_available\",\"health_check_available\",\"first_aid_kit_available\",\"contactless_checkin\",\"cashless_payments\",\"social_distancing\",\"separators\",\"sanitized_dinnerware\",\"optional_cleaning\",\"covered_food_delivery\",\"access_to_health_care_professional\",\"free_face_masks\"]'),
(9, 298079, 'Wollongong Surf Leisure Resort', '201 Pioneer Road, Fairy Meadow, Wollongong', '4', 394.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul2U0T7wgVdGc99PFXpUW_dTowOntnJ6Hg0-7U7lfAXGWnowWkoHPy8kvq285Ic8zRxixMN1K0rebXBJ77AJk5kF07PnaEVYr3O2spaTAe-14IuJaUrjFjUiHsbzMkQ.jpg', 'AUD', '[\"paid_parking\",\"meeting_facilities\",\"sauna\",\"garden\",\"non_smoking_rooms\",\"family_rooms\",\"free_parking\",\"internet_services\",\"spa_wellness_centre\",\"children_play_ground\",\"bbq_facilities\",\"wireless_lan\",\"minigolf\",\"swimmingpool_indoor\",\"air_conditioning\",\"indoor_swimming_pool_all_year\",\"beach_front\",\"parking_on_site\",\"paid_wifi\",\"swimming_pool\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"rooms_sealed_after_cleaning\",\"staff_follows_safety_measures\",\"stationery_removed\",\"hand_sanitizers_available\",\"first_aid_kit_available\",\"contactless_checkin\",\"cashless_payments\",\"social_distancing\",\"separators\",\"thermometers_available\",\"free_face_masks\"]'),
(10, 659343, 'The Belmore All-Suite Hotel', '39 Smith Street, Wollongong', '3.5', 404.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/UlwzA3dxFLcGVR_g-cvGsmLjozdb4zWj_qvp7BGfJOB8P5UUQqIJkqCWBCAAp_qGxyNkdP4XBH1NZMoRG8j73rHemwgcFOMHjCS5PLlImOu2vbZLpZdLT8EZvd_u5Q.jpg', 'AUD', '[\"paid_parking\",\"golf_course_close_by\",\"garden\",\"non_smoking_rooms\",\"facilities_for_disabled\",\"family_rooms\",\"free_parking\",\"internet_services\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"daily_maid_service\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"social_distancing_in_dining_areas\",\"in_room_dining\",\"staff_follows_safety_measures\",\"hand_sanitizers_available\",\"first_aid_kit_available\",\"contactless_checkin\",\"cashless_payments\",\"social_distancing\",\"separators\",\"sanitized_dinnerware\",\"optional_cleaning\"]'),
(11, 273362, 'Wollongong Serviced Apartments', '54 Kembla Street, Wollongong', '4', 446.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul0zA3dxFLcGVUoZmn0bQPA7YGULmXowB1q0x8yNusMXMJeTzgNSWWGoAj6cSPxZ6zTGm-oTwjA8PzwibhSac-36uI8p6XxSimAmmMDXdoWwS6WaBTj6grVI2ZPsoDA.jpg', 'AUD', '[\"paid_parking\",\"garden\",\"non_smoking_rooms\",\"family_rooms\",\"free_parking\",\"internet_services\",\"elevator\",\"luggage_storage\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"daily_maid_service\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\"]'),
(12, 254474, 'Quest Wollongong', '59 - 61 Kembla Street, Wollongong', '4', 498.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul0zA3dxFLcGVWpU8_n2WKw_ga6ZjhOucxALqoGQ6nzm6u31D2cm85YvlUWYMeCtjH1KexH4kej2SoCVfciNZQH6RehCWAddicn5LQnKxF5h1Gc34Or3wBXGdMtumoM.jpg', 'AUD', '[\"paid_parking\",\"meeting_facilities\",\"golf_course_close_by\",\"non_smoking_rooms\",\"fishing\",\"facilities_for_disabled\",\"family_rooms\",\"internet_services\",\"elevator\",\"windsurfing\",\"canoeing\",\"hiking\",\"bowling\",\"horse_riding\",\"luggage_storage\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"aqua_park\",\"daily_maid_service\",\"grocery_deliveries\",\"parking_on_site\",\"wifi_everywhere\",\"wheelchair_accessible\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"social_distancing_in_dining_areas\",\"in_room_dining\",\"staff_follows_safety_measures\",\"stationery_removed\",\"hand_sanitizers_available\",\"health_check_available\",\"first_aid_kit_available\",\"contactless_checkin\",\"cashless_payments\",\"social_distancing\",\"separators\",\"sanitized_dinnerware\",\"optional_cleaning\",\"breakfast_takeaway_boxes\"]'),
(13, 1960154, 'Downtown Motel', '76 Crown Str., Wollongong', '2', 198.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/UlwzA3dxFLcGVZo5CTdL5HccTK0q-iH_Pi9HY0B0tgyz__jeXAnlqsLDnqV4d7PoOyZMY55lEJU5P4LDay7w0RsD5GIHwhXDnSOEG8rb7nrvYRG0XRz2WV7ofmObxA.jpg', 'AUD', '[\"paid_parking\",\"non_smoking_rooms\",\"family_rooms\",\"free_parking\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"parking_on_site\",\"private_parking\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"rooms_sealed_after_cleaning\",\"social_distancing_in_dining_areas\",\"in_room_dining\",\"staff_follows_safety_measures\",\"stationery_removed\",\"hand_sanitizers_available\",\"health_check_available\",\"first_aid_kit_available\",\"contactless_checkin\",\"cashless_payments\",\"social_distancing\",\"professional_cleaning\",\"sanitized_dinnerware\",\"optional_cleaning\"]'),
(14, 431894, 'Flinders Motel', '19 Flinders Street, Wollongong', '3', 270.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/UlwzA3dxFLcGVfByxGd06V7uizTkJ0-3Tga6hj69vQaqUGVpVWY18QFCuQN9Yplk6zpVi47b5ZC2nZn0Y-6Xke_TE_QRjo1w6u9X7Nrpa_f06Fg8W3c3WuH91blxsQ.jpg', 'AUD', '[\"paid_parking\",\"restaurant\",\"golf_course_close_by\",\"garden\",\"non_smoking_rooms\",\"family_rooms\",\"free_parking\",\"internet_services\",\"luggage_storage\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"daily_maid_service\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"first_aid_kit_available\"]'),
(15, 434806, 'Solomon Inn Wollongong', '111 Princes Highway (cross street Gibsons Road), Wollongong', '3.5', 258.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/UlyU0T7wgVdGc_8F-N-Euyo-Beiio2Ll4a4u5aYFBqsagXkmz3gPf9thqOlAnqsS1SxVBBGpmMOp9N4nTVb-6Pf7Nm29Fwxhz8p2-qy5zaxO5mGMQUb6kAumU8yoKw.jpg', 'AUD', '[\"paid_parking\",\"bar\",\"garden\",\"non_smoking_rooms\",\"family_rooms\",\"free_parking\",\"internet_services\",\"luggage_storage\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"rooms_sealed_after_cleaning\",\"staff_follows_safety_measures\",\"stationery_removed\",\"first_aid_kit_available\",\"cashless_payments\",\"social_distancing\",\"optional_cleaning\"]'),
(16, 319081, 'Normandie Inn and Function Centre', '30 Bourke Street, Wollongong', '3', 314.78, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/UlyU0T7wgVdGcwq6TNoLeYE9C5y_XUzl2cYiMA_UGHscpr8DqJEAmMB87oASLnkF5siLdQqjL6VLB0WE7hCmNmDjSkJ1IxKJcea1a-3RWbriN3Gwz62dywBC_vJ-Ng.jpg', 'AUD', '[\"paid_parking\",\"non_smoking_rooms\",\"free_parking\",\"internet_services\",\"luggage_storage\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"air_conditioning\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\"]'),
(17, 6330872, 'Argo Apartments', '65 Church Street, Wollongong', '0', 669.90, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/Ul0zA3dxFLcGVSFSQUCdMGwTctbAwnYwjw46e4A8Dynw6NoD3FiDkOU0FWDGlBbRvUI36_KWsq-KAGGZt2S6FbQ54t-K8N8fnmqTtQe_2TeUL9rmOhS3rTYO_6MkVBA.jpg', 'AUD', '[\"paid_parking\",\"pets_allowed\",\"golf_course_close_by\",\"non_smoking_rooms\",\"babysitting_child_services\",\"facilities_for_disabled\",\"family_rooms\",\"elevator\",\"luggage_storage\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"trouser_press\",\"daily_maid_service\",\"parking_on_site\",\"private_parking\",\"wheelchair_accessible\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"rooms_sealed_after_cleaning\",\"staff_follows_safety_measures\",\"hand_sanitizers_available\",\"health_check_available\",\"first_aid_kit_available\",\"contactless_checkin\",\"cashless_payments\",\"social_distancing\",\"optional_cleaning\",\"access_to_health_care_professional\",\"thermometers_available\"]'),
(18, 414870, 'Beach Park Motel', '10 Pleasant Avenue, Wollongong', '3', 346.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/UlwzA3dxFLcGVbJLx2-YOPvPg2aK7SiH0ozVG7JuT-mlVtlopI-CZ98muX91V_2NinjMm_i3rQesyseL13TWlBLN7ornl2q6VwcQMsw9ngPWMutteXlYHEVkGDE2XA.jpg', 'AUD', '[\"paid_parking\",\"garden\",\"non_smoking_rooms\",\"facilities_for_disabled\",\"family_rooms\",\"free_parking\",\"internet_services\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"air_conditioning\",\"beach_front\",\"parking_on_site\",\"private_parking\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"rooms_sealed_after_cleaning\",\"staff_follows_safety_measures\",\"hand_sanitizers_available\",\"health_check_available\",\"social_distancing\",\"professional_cleaning\",\"optional_cleaning\"]'),
(19, 1949155, 'Bel Mondo Apartments', '10 Keira Street, Wollongong', '4', 330.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/UlwzA3dxFLcGVfB6PbxGiJYALKkrGTL8d5hAdWXtbQfICzC70JPxIPIVjY5f_P4l9Gf6cfL6YYkVoT4TOCRa3o06m6eCd1mO4cxenSZOWerw2k7rSoT7jYaa1Q5elA.jpg', 'AUD', '[\"paid_parking\",\"non_smoking_rooms\",\"facilities_for_disabled\",\"family_rooms\",\"free_parking\",\"internet_services\",\"wireless_lan\",\"free_wifi_internet_access_included\",\"all_public_and_private_spaces_non_smoking\",\"air_conditioning\",\"daily_maid_service\",\"parking_on_site\",\"private_parking\",\"cleaning_chemicals\",\"linens_legal_wash\",\"rooms_disinfected\",\"rooms_sealed_after_cleaning\",\"staff_follows_safety_measures\",\"stationery_removed\",\"health_check_available\",\"first_aid_kit_available\",\"contactless_checkin\",\"cashless_payments\",\"social_distancing\",\"professional_cleaning\"]'),
(20, 460208, 'Elsinor Motor Lodge', 'Cnr Kanahooka Drive and Prince Edward Drive, Dapto, Wollongong', '3', 286.00, 'https://q-xx.bstatic.com/xdata/w/hotel/max500_watermarked_standard_bluecom/UlwzA3dxFLcGVbPEfpOfAR5srrLxuPTBxwHFxTtjtWQ-CwhxAuyVzuNjstvNdxX7ati3IA0OQSOKuRLPxhjzeiMz3l7LIyUvy7ozrnnr9cKe214J-uGsx7WXE608sg.jpg', 'AUD', '[\"paid_parking\",\"restaurant\",\"bar\",\"non_smoking_rooms\",\"free_parking\",\"internet_services\",\"hot_tub\",\"bbq_facilities\",\"wireless_lan\",\"swimmingpool_indoor\",\"free_wifi_internet_access_included\",\"air_conditioning\",\"indoor_swimming_pool_all_year\",\"daily_maid_service\",\"parking_on_site\",\"private_parking\",\"wifi_everywhere\",\"swimming_pool\",\"linens_legal_wash\",\"rooms_disinfected\",\"stationery_removed\",\"health_check_available\",\"first_aid_kit_available\",\"cashless_payments\",\"social_distancing\",\"separators\",\"optional_cleaning\",\"access_to_health_care_professional\",\"thermometers_available\"]');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `designation`, `dob`, `email`, `mobile`, `password`, `profile_image`) VALUES
(1, 'Indrajeet', 'Marve', 'developer', '2021-02-13', 'jeet@gmail.com', '8147269017', '0cc175b9c0f1b6a831c399e269772661', './uploads/13-02-202112-53-37_profile.jpg'),
(3, 'Demo', 'demo', 'demo', '2021-02-13', 'demo@demo.com', '8777777777', 'fe01ce2a7fbac8fafaed7c982a04e229', './uploads/13-02-202102-26-39_profile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_hotel_list`
--
ALTER TABLE `tbl_hotel_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hotel_list`
--
ALTER TABLE `tbl_hotel_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
