<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if(!empty($value)){ ?>
	<div class="card py-2 px-3">
		<div class="row ">
			<div class="col-md-4 col-lg-3 col-sm-12">
				<img src="<?php echo $value['photo'];?>" class="img-responsive" width="225" height="225" alt="<?php echo $value['hotel_name']; ?>">
			</div>
			<div class="col-md-8 col-lg-9 col-sm-12">
				<table>
					<tr>
						<td><label>Hotel Name </label></td>
						<td><span><?php echo $value['hotel_name']; ?></span></td>
					</tr>
					<tr>
						<td><label>Address </label></td>
						<td><span><?php echo $value['address']; ?></span></td>
					</tr>
					<tr>
						<td><label>Stars </label></td>
						<td><span><?php echo $value['starts']; ?></span></td>
					</tr>
					<tr>
						<td><label>Price </label></td>
						<td><span><?php  echo $value['price'];?></span></td>
					</tr>
					<tr>
						<td><label>Currency Code </label></td>
						<td><span><?php  echo $value['hotel_cur_code'];?></span></td>
					</tr>
					<tr>

						<td style="vertical-align: baseline;"><label>Ammenities </label></td>
						<td>
							<?php  
								echo '<ol>';
								foreach ($value['amenities'] as $key => $value) {
									echo '<li>'.$value.'</li>';
								}
								echo '</ol>';
							?>
						</td>
					</tr>
				</table>
			</div>
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
  	height: auto!important;
  	width: 100%!important;
  	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  	transition: 0.3s;
  	margin-top: 5px;
  	margin-bottom: 5px;
}

</style>
