<!--footer part starts here -->
<div id="footer_outline">
	<div class="container">
    	<div class="row footer_row">
        	<div class="col-md-3">
            	<h3 class="other_footer_part_heading">CygnaTech</h3>
                <ul class="other_footer_nav_ul">
                    <li><a href="finding-job.php">How It Works</a></li>
                    <li><a href="finding-job.php">Projects</a></li>
                    <li><a href="services-products.php">Services</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
                
            </div>
            <div class="col-md-3">
            	<h3 class="other_footer_part_heading">LIKE Us</h3>
                <!-- facebook like box code -->
                <div class="fb-like-box" data-href="https://www.facebook.com/pages/Cygnatech/134154106772396" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                <!-- end here -->
            </div>
            <div class="col-md-3">
            	<h3 class="other_footer_part_heading">Quick Links</h3>
                <ul class="other_footer_nav_ul">
                	<li><a href="faq.php">FAQs</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-condition.php">Terms of Service</a></li>
                    <li><a href="mypage.php?id=p54212b2917dc6">Copyright Infringement Policy</a></li>
                    <li><a href="mypage.php?id=p54212a4d4a47d">Code of Conduct</a></li>
                    <li><a href="advertise-with-us.php">Advertise With Us</a></li>
                    <li><a href="sign-up.php">Join Us Today!</a></li>
                </ul>
            </div>
            <div class="col-md-3">
            	<h3 class="other_footer_part_heading">Get In Touch</h3>
                <div class="footer_social_icon_outline">
                	<li><a href="https://www.facebook.com/pages/Cygnatech/134154106772396"><img src="img/facebook-2-icon-32.png" /></a></li>
                    <li><a href="https://twitter.com/Fanysf01"><img src="img/twitter-2-icon-32.png" /></a></li>
                    <li><a href="https://www.linkedin.com/profile/view?id=180837051&trk=nav_responsive_tab_profile_pic"><img src="img/linkedin-2-icon-32.png" /></a></li>
                    <li><a href="https://plus.google.com/110750814669641605320/posts"><img src="img/google-plus-2-icon-32.png" /></a></li>
                    <div class="clearfix"></div>
                </div>
                <h3 class="other_footer_part_heading">NewsLetter</h3>
                <!-- Begin MailChimp Signup Form -->
		        <div id="mc_embed_signup">
					<form action="//cygnatech.us9.list-manage.com/subscribe/post?u=f716247efba58fc900db07ae5&amp;id=c39ad68a8f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			           <div class="input-group">
			            <input type="email" value="" name="EMAIL" class="form-control custom-input required email" id="mce-EMAIL">
			            <div id="mce-responses" class="clear">
					        <div class="response" id="mce-error-response" style="display:none"></div>
					        <div class="response" id="mce-success-response" style="display:none"></div>
					    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			            <span class="input-group-btn">
			             <div style="position: absolute; left: -5000px;"><input type="text" name="b_f716247efba58fc900db07ae5_c39ad68a8f" tabindex="-1" value=""></div>
			             <button type="submit" class="btn btn-success" name="subscribe" id="mc-embedded-subscribe">JOIN</button>
			            </span>
			           </div><!-- input group ends -->
			          </form>
		         </div>
		         <!--End mc_embed_signup-->
                
            </div>
            
        </div>
    </div>
</div>
<!--footer part ends here -->
<!-- copyright part starts here -->
<div id="copyright_outline">
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
<!-- copyright part ends here -->
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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