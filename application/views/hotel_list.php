<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
	<div class="col-md-4">
		<label>Sort By Price</label>
		<select class="form-select" id="sort_price" onchange="submitFormPrice()">
		  <option value="asc">Asc</option>
		  <option value="desc">Desc</option>
		</select>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<label>Sort By Stars</label>
		<select class="form-select" id="sort_stars" onchange="submitFormStars()">
		  <option value="asc">Asc</option>
		  <option value="desc">Desc</option>
		</select>
	</div>
</div>

<form action="<?php echo base_url(); ?>Home/SortData/" method="get" id="sort_form">
	<input type="hidden" name="sort_type" id="sort_type">
	<input type="hidden" name="sort_value" id="sort_value">
</form>
<?php foreach ($list as $key => $value) {?>
		<div class="row card">
		
			<div class="col-md-1 mt">
				<img src="<?php echo $value->photo;?>" class="img-responsive" width="150" height="150">
			</div>
			<div class="col-md-4 mt"><label>Hotel Name :</label> <?php echo $value->hotel_name; ?></div>
			<div class="col-md-3 mt"><label>Address :</label> Rs <?php echo $value->address; ?></div>
			<div class="col-md-2 mt"> <label>Stars :</label><?php echo $value->starts; ?></div>
			<div class="col-md-2 mt"> <label>Price :</label><?php  echo $value->price;?></div>
			<div class="col-md-2 mt"> <label>Currency Code :</label><?php  echo $value->hotel_cur_code;?></div>
			<div class="col-md-2 mt">
			<form action="<?php echo base_url() ?>/Home/ViewHotelDetails/" method="post" name="book_form" id="book_form">
				<input type="hidden" name="hotel_id" value="<?php echo $value->hotel_id;?>">
				<input type="submit" value="Book" id="search_btn" class="btn  btn-primary btn-md ">
			</form>	
			</div>
			<div class="clearfix"> </div>

		</div>
<?php } ?>

<style type="text/css">
label{
font-weight: bold;
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