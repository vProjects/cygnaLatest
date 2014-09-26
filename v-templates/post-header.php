<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="keywords, keyword, keyword phrase, etc.">
<meta name="description" content="This is an example of a meta description. This will often show up in search results.">
<link rel="icon" type="image/ico" href="favicon.ico">

<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="dist/css/jquery.Jcrop.min.css" />
<link rel="stylesheet" type="text/css" href="dist/css/jquery.datepick.css" />
<link rel="stylesheet" type="text/css" href="dist/css/style.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="dist/js/bootstrap.js"></script>
<script src="js/validiation.js"></script>
<script src="js/asynch-function.js"></script>
<script src="js/element-effect.js"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/jquery.datepick.js"></script>
<script src="js/jquery.Jcrop.min.js"></script>
<script src="js/upload.js"></script>
<title>CYGNATECH | <?php echo $pageTitle; ?></title>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body>

<!-- header starts here -->
<div class="navbar navbar-fixed-top profile_header_outline" role="navigation">
	<?php if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){ ?>
		<a href="notification-list.php"><div class="inbox-nav"><span class="glyphicon glyphicon-exclamation-sign glyph"></span>ALERTS(<?php $manageContent->getTotalUnreadNotification(); ?>)</div></a>
	    <a href="message-list.php"><div class="inbox-nav"><img src="img/inbox_icon.png" alt="inbox_icon" class="inbox-icon-coustom"/>INBOX(<span id="msg_notification">0</span>)</div></a>
	    <a><div class="inbox-nav"><span class="glyphicon glyphicon-user glyph"></span><?php echo $manageContent->getUsername($_SESSION['user_id']);?></div></a>
	<?php } ?>
	<div class="container">
    	<div class="row profile_header_row">
        	<div class="col-sm-6 col-ms-6">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#profile_header_nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="glyphicon glyphicon-align-justify"></span>
                    </button>
                    <a class="navbar-brand profile_header_brand" href="index.php"><img src="img/cygna-logo18.png" class="logo-img" alt="logo"/></a>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php //include("nav.php") ?>
            </div>
        </div>
    </div>
    <?php include("post-nav.php") ?>
</div>
<!-- header ends here -->

