<?php
	session_start();
	//including the bll get data class
	include 'v-includes/BLL.getData.php';
	$manageContent = new BLL_manageData();
	
	if(isset($GLOBALS['_COOKIE']['uid']) && !isset($_SESSION['user_id']))
	{
		$_SESSION['user_id'] = $GLOBALS['_COOKIE']['uid'];
	}
	else if(!isset($GLOBALS['_COOKIE']['uid']) && isset($_SESSION['user_id']))
	{
		//setting cookie value
		$manageContent->createUserCookie($_SESSION['user_id']);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="keywords, keyword, keyword phrase, etc.">
<meta name="description" content="This is an example of a meta description. This will often show up in search results.">
<link rel="icon" type="image/ico" href="favicon.ico"/>

<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="dist/css/style.css" />
<link rel="stylesheet" type="text/css" href="dist/css/style_custom.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="dist/js/bootstrap.js"></script>
<title>CYGNATECH | HOME</title>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body id="home_body">

<!-- header starts here -->
<div class="navbar navbar-fixed-top" id="header_navigation" role="navigation">
	<div class="container">
    	<div class="row profile_header_row">
        	<div class="col-sm-12">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header_nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="glyphicon glyphicon-align-justify"></span>
                    </button>
                    <a class="navbar-brand profile_header_brand" href="index.php"><img src="img/cygna-logo17.png" class="logo-img" alt="logo"/></a>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="header_nav">
                    <div id="login_section_outline">
                        <div class="login_box_outline">
                        	<?php
								//checking cookie value and session value
								if(isset($GLOBALS['_COOKIE']['uid']) || isset($_SESSION['user_id'])){
							?>
                            <div class="login_box pull-left" id="signup_outline">
                                <span class="login_text"><a href="cygna.php?op=pro">Cygna</a></span>
                            </div>
                            <div class="login_box pull-left" id="signup_outline">
                                <span class="login_text"><a href="v-modules/logout.php">Log Out</a></span>
                            </div>
                            <?php
								} else {
							?>
                            <div class="login_box pull-left">
                                <span class="login_text" data-toggle="modal" data-target="#myModal"><a href="#">Login</a></span>
                            </div>
                            <div class="login_box pull-left" id="signup_outline">
                                <span class="login_text"><a href="sign-up.php">Sign Up</a></span>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                        <div class="footer_social_icon_outline">
		                	<li><a href="https://www.facebook.com/pages/Cygnatech/134154106772396"><img src="img/facebook-2-icon-32.png" alt="facebook-icon" /></a></li>
		                    <li><a href="https://www.linkedin.com/profile/view?id=180837051&trk=nav_responsive_tab_profile_pic"><img src="img/linkedin-2-icon-32.png" alt="linkedin-icon"/></a></li>
		                    <li><a href="https://plus.google.com/110750814669641605320/posts"><img src="img/google-plus-2-icon-32.png" alt="google-plus-icon"/></a></li>
		                    <li id="twitter_list"><a href="https://twitter.com/Fanysf01" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
		                    <div class="clearfix"></div>
		                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header ends here -->
<!-- body starts here -->
<div id="body_outline">
	<div class="container">
    	<!-- slider row starts here -->
    	<div class="row body_slider_row">
        	
            	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="img/slider3.jpg" alt="img1">
                      <div class="carousel-caption carousel-caption-custom">
                      	<h2 class="slider_text_green">Get Work Done, the Way You Want It</h2>
					  </div>
                    </div>
                    <div class="item">
                      <img src="img/slider1.jpg" alt="img2">
	                  <div class="carousel-caption carousel-caption-custom">
                      	<h2 class="slider_text_green">Experienced Freelancers at Your Fingertips</h2>
					  </div>
                    </div>
                    <div class="item">
                      <img src="img/slider2.jpg" alt="img3">
                      <div class="carousel-caption carousel-caption-custom">
                      	<h2 class="slider_text_green">Hire Skilled Professionals across the Globe</h2>
					  </div>
                    </div>
                  </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control carousel-control-custom" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control carousel-control-custom" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div>
            
        </div>
        <!-- slider row ends here -->
        <!-- text section starts here -->
        <div class="row mrgn-bl-sldr">
        	<div class="col-md-12">
        		<div class="home_text">Whether you’re an enterprise, a small-medium business, or a start-up company, CygnaTech has the talent you need to succeed. 
        			Our dynamic outsourcing marketplace is equipped with freelancers who are ready to tackle your vision with precision. Whether it be design, development, writing and translation, sales/marketing, software development, social media, video, audio, or business support, we make it easy to hire and get work done. </div>
        	</div>
        </div>
        <!-- text section ends here -->
        <!-- body details starts here -->
        <div class="row box_part_row mrgn-bl-sldr">
        	<div class="col-md-3 col-sm-6 col-xs-6 box_part_outline">
            	<a href="example-joblist.php?cat=Frontend Design" class="hvr-dec-none">
            		<img src="img/img1.jpg" alt="design" class="box_part_image" />
	                <div class="box_part_description_outline cust-ht-index">
	                	<h3 class="box_part_description_heading">Design</h3>
	                </div>
            	</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 box_part_outline">
            	<a href="example-joblist.php?cat=It & Programming" class="hvr-dec-none">
            		<img src="img/img2.jpg" alt="web development" class="box_part_image" />
	                <div class="box_part_description_outline cust-ht-index">
	                	<h3 class="box_part_description_heading">Web Development</h3>
	                </div>
            	</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 box_part_outline">
            	<a href="example-joblist.php?cat=Content Management" class="hvr-dec-none">
            		<img src="img/img3.jpg" alt="writing and translation" class="box_part_image" />
	                <div class="box_part_description_outline cust-ht-index">
	                	<h3 class="box_part_description_heading">Writing and Translation</h3>
	                </div>
            	</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 box_part_outline">
            	<a href="example-joblist.php?cat=Multimedia" class="hvr-dec-none">
            		<img src="img/img4.jpg" alt="video, photo, audio" class="box_part_image" />
	                <div class="box_part_description_outline cust-ht-index">
	                	<h3 class="box_part_description_heading">Video, Photo &amp; Audio</h3>
	                </div>
            	</a>
            </div>
        </div>
        <div class="row box_part_row">
        	<div class="col-md-3 col-sm-6 col-xs-6 box_part_outline">
            	<a href="example-joblist.php?cat=Mobile Application" class="hvr-dec-none">
            		<img src="img/img5.jpg" alt="software Development" class="box_part_image" />
	                <div class="box_part_description_outline cust-ht-index">
	                	<h3 class="box_part_description_heading">Software Dev and Mobile</h3>
	                </div>
            	</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 box_part_outline">
            	<a href="example-joblist.php?cat=Social Media" class="hvr-dec-none">
            		<img src="img/img6.jpg" alt="social media" class="box_part_image" />
	                <div class="box_part_description_outline cust-ht-index">
	                	<h3 class="box_part_description_heading">Social Media</h3>
	                </div>
            	</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 box_part_outline">
            	<a href="example-joblist.php?cat=Sales and Marketing" class="hvr-dec-none">
            		<img src="img/img7.jpg" alt="sales and marketing" class="box_part_image" />
	                <div class="box_part_description_outline cust-ht-index">
	                	<h3 class="box_part_description_heading">Sales and Marketing</h3>
	                </div>
            	</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 box_part_outline">
            	<a href="example-joblist.php?cat=business Support" class="hvr-dec-none">
            		<img src="img/business-support.jpg" alt="business support" class="box_part_image" />
	                <div class="box_part_description_outline cust-ht-index">
	                	<h3 class="box_part_description_heading">Business Support</h3>
	                </div>
            	</a>
            </div>
        </div>
        <!-- body details ends here -->
    </div>
</div>
<!-- body ends here -->
<!--footer part starts here -->
<div id="footer_outline">
	<div class="container">
    	<div class="row footer_row">
        	<div class="col-md-4">
            	<h2 class="footer_part_heading"><span class="footer_part_heading_text1">Quick</span><span class="footer_part_heading_text2">Links</span></h2>
                <ul class="footer_quick_links">
                    <li><a href="faq.php">How To FAQ</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="advertise-with-us.php">Advertise With Us</a></li>
                    <li><a href="sign-up.php">Join Us Today!</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="finding-job.php">How It Works</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="mypage.php?id=p54212b2917dc6">Copyright Infringement Policy</a></li>
                    <li><a href="mypage.php?id=p54212a4d4a47d">Code of Conduct</a></li>
                    <li><a href="terms-condition.php">Terms Of Use</a></li>
                </ul>
          
            </div>
            <div class="col-md-4">
            	<h2 class="footer_part_heading"><span class="footer_part_heading_text1">LIKE</span><span class="footer_part_heading_text2">Us</span></h2>
                <!-- facebook like box code -->
                <div class="fb-like-box" data-href="https://www.facebook.com/pages/Cygnatech/134154106772396" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                <!-- end here -->
                <h2 class="footer_part_heading"><span class="footer_part_heading_text2">NewsLetter</span></h2>
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
            <div class="col-md-4">
            	<h2 class="footer_part_heading"><span class="footer_part_heading_text2">How it works?</span></h2>
                <div class="how_it_works_outline">
                	<div class="col-md-3 col-sm-3 col-xs-3 how_it_works_image_outline"><img src="img/how_it_works_icon1.png" class="how_it_works_image"/></div>
                    <div class="col-md-9 col-sm-9 col-xs-9 how_it_works_text_outline">
                    	<div class="how_it_works_heading">Sign Up</div>
                        <p class="how_it_works_para">Post a Job or Find a Job by Becoming a Registered User</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="how_it_works_outline">
                	<div class="col-md-3 col-sm-3 col-xs-3 how_it_works_image_outline"><img src="img/how_it_works_icon2.png" class="how_it_works_image"/></div>
                    <div class="col-md-9 col-sm-9 col-xs-9 how_it_works_text_outline">
                    	<div class="how_it_works_heading">Hire For The Work</div>
                        <p class="how_it_works_para">Browse our Services and Search for Freelancers around the World</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="how_it_works_outline">
                	<div class="col-md-3 col-sm-3 col-xs-3 how_it_works_image_outline"><img src="img/how_it_works_icon3.png" class="how_it_works_image"/></div>
                    <div class="col-md-9 col-sm-9 col-xs-9 how_it_works_text_outline">
                    	<div class="how_it_works_heading">Get the Work Done!</div>
                        <p class="how_it_works_para">Find Jobs and Save on Project Fees. We Charge Freelancers Only 5.5%!</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="how_it_works_outline">
                	<div class="col-md-3 col-sm-3 col-xs-3 how_it_works_image_outline"><img src="img/how_it_works_icon4.png" class="how_it_works_image"/></div>
                    <div class="col-md-9 col-sm-9 col-xs-9 how_it_works_text_outline">
                    	<div class="how_it_works_heading">Pay for a Job Well Done</div>
                        <p class="how_it_works_para">Compensate Freelancers for Services Rendered</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer part ends here -->
<!--footer counter part starts here -->
<div id="footer_counter_outline">
	<div class="container">
    	<div class="row footer_counter_row">
        	<div class="col-md-4 col-sm-4 col-xs-12 footer_counter_text_outline">
            	<div class="footer_counter_value footer_counter_projects">1500</div>
                <p class="footer_counter_text_bottom">Total Projects</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 footer_counter_text_outline">
            	<div class="footer_counter_value footer_counter_amount">$50000.00</div>
                <p class="footer_counter_text_bottom">Total Amount</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 footer_counter_text_outline">
            	<div class="footer_counter_value footer_counter_users">1500</div>
                <p class="footer_counter_text_bottom">Total Users</p>
            </div>
        </div>
    </div>
</div>
<!--footer counter part ends here -->
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
<!-- modal part starts here -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header custom-hmodal">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title login_text" id="myModalLabel">Log in</h4>
      </div>
      <div class="modal-body">
			<div class="col-md-12">
			<div class="modal-box">
					<div class="col-md-12">
						<form action="v-includes/class.formData.php" class="form-horizontal" role="form" method="post">
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label custom-chk">Email/Username</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control" name="username" placeholder="Email or Username">
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label custom-chk">Password </label>
							<div class="col-sm-9">
							  <input type="password" class="form-control" name="password" placeholder="Password">
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">
							  <div class="checkbox custom-chk">
								<label>
								 <input type="checkbox" name="loggedin_time"> login for 2 weeks
								</label>
								</div>
							</div>
							<div class="col-sm-4 f-psd"><a href="forget-password.php">forgot password?</div></a>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
							  	<input type="hidden" name="fn" value="<?php echo md5('login');?>" />
								<input type="submit" class="btn btn-default btn-custom" value="Sign In"/>
							</div>
						  </div>
					</form>
				</div>
				<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				</div>
					<div class="col-md-2"></div>
					<div class="clearfix"></div>
					
      </div>
      <div class="modal-footer custom-hmodal">
	  </div>
      </div>
    </div>
  </div>
</div>
<!-- modal ends here -->
<script type="text/javascript">
  $( document ).ready(function() {
   
    $('#carousel-example-generic').carousel({
      interval: 10000
    });
  });
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=485383234941891&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
