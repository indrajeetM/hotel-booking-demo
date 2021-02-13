<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if(!empty($value)){ ?>
		<div class="row card">
		
			<div class="col-md-1 mt">
				<img src="<?php echo $value['photo'];?>" class="img-responsive" width="150" height="150">
			</div>
			<div class="col-md-4 mt"><label>Hotel Name :</label> <?php echo $value['hotel_name']; ?></div>
			<div class="col-md-3 mt"><label>Address :</label> Rs <?php echo $value['address']; ?></div>
			<div class="col-md-2 mt"> <label>Stars :</label><?php echo $value['starts']; ?></div>
			<div class="col-md-2 mt"> <label>Price :</label><?php  echo $value['price'];?></div>
			<div class="col-md-2 mt"> <label>Currency Code :</label><?php  echo $value['hotel_cur_code'];?></div>
			<div class="col-md-2 mt">
			
			</div>
			<div class="clearfix">
				<?php  
					echo '<ol>';
					foreach ($value['amenities'] as $key => $value) {
						echo '<li>'.$value.'</li>';
					}
					echo '</ol>';
				?>
			</div>

		</div>
<?php }else{
	redirect('Home/ViewHotels');exit();
} ?>
<style type="text/css">
label{
font-weight: bold;
}
	.card{
		overflow: scroll;
	  height: 250px!important;
	  width: 100%!important;
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	  transition: 0.3s;
	  margin-top: 5px;
	  margin-bottom: 5px;
}

</style>
