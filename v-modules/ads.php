<div class="col-md-2 profile_right_part_outline">
<?php
	$ads=$manageContent->getAdvertisement();
?>
<div class="add_place_outline">
	<?php 
	if($ads[0]['add-type']=="HTML")
	{
		echo $ads[0]['value'];
	}
	elseif($ads[0]['add-type']=="Image")
	{
		echo '<img src='.$ads[0]['value'].'>';
	}
	
	?>
</div>
<div class="add_place_outline">
	<?php 
	if($ads[1]['add-type']=="HTML")
	{
		echo $ads[1]['value'];
	}
	elseif($ads[1]['add-type']=="Image")
	{
		echo '<img src='.$ads[1]['value'].'>';
	}
	?>
</div>
</div>