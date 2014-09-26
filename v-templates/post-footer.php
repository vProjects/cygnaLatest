<!-- footer starts here -->

<div id="profile_footer_outline">
	<div class="container">
    	<div class="row copyright_row">
        	<div class="col-md-12 copyright_text_position">
            	<p class="copyright_para">Copyright <?php echo date('Y'); ?> @ cygnatech.com | 
            		<a href="terms-condition.php">Terms Of Use</a> | 
            		<a href="privacy-policy.php">Privacy Policy</a> | 
            		<a href="mypage.php?id=p54212a4d4a47d">Code of Conduct</a> | 
            		<a href="mypage.php?id=p54212b2917dc6">Copyright Infringement Policy</a>
            	</p>
            </div>
        </div>
    </div>
</div>
<!-- footer ends here -->
<?php
	//checking for session variable and showing the result
	if(isset($_SESSION['success']))
	{
		echo '<script type="text/javascript">alertSuccess("'.$_SESSION['success'].'");</script>';
		unset($_SESSION['success']);
	}
	else if(isset($_SESSION['warning']))
	{
		echo '<script type="text/javascript">alertWarning("'.$_SESSION['warning'].'");</script>';
		unset($_SESSION['warning']);
	}
?>
<script type="text/javascript">
	$('#per_date').datepick({
		dateFormat: 'yyyy-mm-dd',
		minDate: new Date(1900, 1 - 1, 01), 
    	maxDate: new Date(),
		yearRange: '1900:2014',
		showTrigger: '#calImg'
	});
	
	$('.date_range').datepick({
		dateFormat: 'yyyy-mm-dd',
		minDate: new Date(1900, 1 - 1, 01), 
    	maxDate: new Date(),
		yearRange: '1900:2014',
		showTrigger: '#calImg'
	});
	
	$('.extend_date').datepick({
		dateFormat: 'yyyy-mm-dd', 
    	minDate: new Date(),
		maxDate: '+3m',
		showTrigger: '#calImg'
	});
</script>
</body>
</html>