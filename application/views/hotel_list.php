<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row justify-content-center">
	<div class="col-md-2">
		<label>Sort By Price</label>
		<select class="form-control" id="sort_price" onchange="submitFormPrice()">
			<option value=""></option>
			<?php 
				if(isset($sort_type) && $sort_type=="price" && !empty($sort_value)){
			?>
		  		<option value="asc" <?php echo ($sort_value=="asc")?'selected':'' ?>>Asc</option>
		  		<option value="desc" <?php echo ($sort_value=="desc")?'selected':'' ?>>Desc</option>
		  	<?php }else { ?>
		  		
		  		<option value="asc">Asc</option>
				<option value="desc">Desc</option>
		  	<?php }?>
		</select>
	</div>

	<div class="col-md-2">
		<label>Sort By Stars</label>
		<select class="form-control" id="sort_stars" onchange="submitFormStars()">
			<option value=""></option>
		  	<?php 
				if(isset($sort_type) && $sort_type=="starts" && !empty($sort_value)){
			?>
		  		<option value="asc" <?php echo ($sort_value=='asc')?'selected':'' ?>>Asc</option>
		  		<option value="desc" <?php echo ($sort_value=='desc')?'selected':'' ?>>Desc</option>
		  	<?php }else { ?>
		  		
		  		<option value="asc">Asc</option>
				<option value="desc">Desc</option>
		  	<?php }?>
		</select>
	</div>

</div>


<form action="<?php echo base_url(); ?>Home/ViewHotels/" method="get" id="sort_form">
	<input type="hidden" name="sort_type" id="sort_type">
	<input type="hidden" name="sort_value" id="sort_value">
</form>
<?php foreach ($list as $key => $value) {?>

	<div class="card py-2 px-3">
		<div class="row ">
			<div class="col-md-4 col-lg-3 col-sm-12">
				<img src="<?php echo $value->photo;?>" class="img-responsive" width="225" height="225" alt="<?php echo $value->hotel_name; ?>">
			</div>
			<div class="col-md-8 col-lg-9 col-sm-12">
				<table>
					<tr>
						<td><label>Hotel Name </label></td>
						<td><span><?php echo $value->hotel_name; ?></span></td>
					</tr>
					<tr>
						<td><label>Address </label></td>
						<td><span><?php echo $value->address; ?></span></td>
					</tr>
					<tr>
						<td><label>Stars </label></td>
						<td><span><?php echo $value->starts; ?></span></td>
					</tr>
					<tr>
						<td><label>Price </label></td>
						<td><span><?php  echo $value->price;?></span></td>
					</tr>
					<tr>
						<td><label>Currency Code </label></td>
						<td><span><?php  echo $value->hotel_cur_code;?></span></td>
					</tr>
					<tr>
						<td>
							<form action="<?php echo base_url() ?>/Home/ViewHotelDetails/" method="post" name="book_form" id="book_form">
								<input type="hidden" name="hotel_id" value="<?php echo $value->hotel_id;?>">
								<input type="submit" value="Book" id="search_btn" class="btn  btn-primary btn-md ">
							</form>
						</td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
<?php } ?>

<style type="text/css">
	label{
		font-weight: bold;
	}
	span{
	    display: inline-block;
	    margin-bottom: .5rem;
	    margin-left: 1rem;
	}

	.card{
	  	height: 250px!important;
	  	width: 100%!important;
	  	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	  	transition: 0.3s;
	  	margin-top: 5px;
	  	margin-bottom: 5px;
	}

</style>

<script type="text/javascript">
	function submitFormPrice(){
		var sort_price = $('#sort_price').val();
		$('#sort_type').val('price');
		$('#sort_value').val(sort_price);
		$('#sort_form').submit();
	}
	function submitFormStars(){
		var sort_price = $('#sort_stars').val();
		$('#sort_type').val('starts');
		$('#sort_value').val(sort_price);
		$('#sort_form').submit();
	}
</script>