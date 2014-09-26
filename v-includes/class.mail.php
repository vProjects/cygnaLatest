<?php
	//include php mailer autoload class
	require 'mail/PHPMailerAutoload.php';
	
	;
	class mailFunction
	{
		//defining public variable
		public $mail;
		
		/*
         * top domail url for activation.php
         */ 		
        private $link = 'http://www.cygnatech.com/';
		
		
		/*
		*  Public variable which is used to define where the mail will go
		*/
		private $to= '';

		/*
		*  Message which will be send to the user
		*/
		
		private $subject = 'Thanks for Joining CygnaTech';
		

		/*
		*  Public variable which is used to from where this person is getting the mail
		*/
		
		public $from = 'support@cygnatech.com';
		public $fromname = array('CygnaTech Admin');
		
		/*
		- method for constructing PHP Mailer class
		- Auth: Dipanjan
		*/	
		function __construct()
		{
			$this->mail = new PHPMailer;
		}
		
		/*
		- method for sending activation link to new user
		- Auth: Dipanjan
		*/
		function activationLink($toEmail,$toUsername,$user_id)
		{
			$activationMessage = $this->link.'email-verification.php?activated=true&uid='.$user_id.'&mail='.$toEmail;
			$subject = 'Email Verification Of Your Account';
			$htmlBody = '<p>To verify your account please click on the following link.. </p>
							<p>'.$activationMessage.'</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}

		/*
		- method for sending mail after registration
		- Auth: Dipanjan
		*/
		function confirmationRegistration($toEmail,$toUsername)
		{
			$subject = 'Confirmation for Registration Successfull';
			$htmlBody = '<p>Thank you for Registration in Cygnatech.com</p>
							<p>You can post a job for free.</p>
							<p>Please Update your profile and personal info in your profile.</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}

		/*
		- method for sending mail after bid on project
		- Auth: Dipanjan
		*/
		function mailAfterBidding($toEmail,$toUsername,$projectname)
		{
			$subject = 'Thank You for Bidding On '.$projectname;
			$htmlBody = '<p>Thank you for Bidding on '.$projectname.'</p>
							<p>If your bid will be selected by Employer, you will be informed.</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}
		
		/*
		- method for sending mail for awarding your bid
		- Auth: Dipanjan
		*/
		function mailForAwardJob($toEmail,$toUsername,$projectname)
		{
			$subject = 'Your Bid is Awarded for project: '.$projectname;
			$htmlBody = '<p>Congratulations, Your bid is Awarded for project: '.$projectname.'</p>
							<p>Now you have to accept the job to progress on this project.</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}
		
		/*
		- method for sending mail for accepting job by contractor
		- Auth: Dipanjan
		*/
		function mailForAcceptingJob($toEmail,$toUsername,$conName,$projectName)
		{
			$subject = 'Your Project: '.$projectName.' is Accepted By Contractor';
			$htmlBody = '<p>Congratulations, Your Project is Accepted By '.$conName.'</p>
							<p>Now you can start work for your project.</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}
		
		/*
		- method for sending mail for accepting job by contractor
		- Auth: Dipanjan
		*/
		function mailForDecliningJob($toEmail,$toUsername,$conName,$projectName)
		{
			$subject = 'Your Project: '.$projectName.' is Declined By Contractor';
			$htmlBody = '<p>Congratulations, Your Project is Declined By '.$conName.'</p>
							<p>Now you have to repost your job to get new freelancer.</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}
		
		/*
		- method for sending mail for accepting job by contractor
		- Auth: Dipanjan
		*/
		function mailForFundingMoney($toEmail,$toUsername,$milestoneName,$projectName)
		{
			$subject = 'Money Funded By Employer';
			$htmlBody = '<p>Congratulations, Employer Funded money for milestone: '.$milestoneName.'</p>
							<p>You can get the money after releasing it by employer.</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}
		
		/*
		- method for sending mail for accepting job by contractor
		- Auth: Dipanjan
		*/
		function mailForReleasingMoney($toEmail,$toUsername,$milestoneName,$projectName)
		{
			$subject = 'Money Released By Employer';
			$htmlBody = '<p>Congratulations, Employer Released money for milestone: '.$milestoneName.'</p>
							<p>You can withdraw this money anytime from Admin.</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}
		
		/*
		- method for sending mail after polling
		- Auth: Dipanjan
		*/
		function mailAfterPolling($toEmail,$toUsername)
		{
			$subject = 'Thank You for Participating in Polling';
			$htmlBody = '<p>Thank you for Polling in Cygnatech.com</p>
							<p>You can post a job for free.</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}
		
		/*
		- method for sending forgot password mail
		- Auth: Dipanjan
		*/
		function forgotPasswordMail($toEmail,$toUsername,$password)
		{
			$subject = 'Change Your Password';
			$htmlBody = '<p>Your New Password Is: '.$password.'</p>
							<p>You can login with your new password.</p>
							<p>Thanks And Regards</p>
							<p>CygnaTech Team</p>';
			
			//calling firemail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$htmlBody);
			return $mailSent;
		}
		
		/*
		- method for sending mail for advertise with us
		- Auth: Riju
		*/
		function advertiseWithUsMail($body)
		{
			$toEmail = 'support@cygnatech.com';
			$toUsername = 'Admin';
			$subject = 'Information For Advertisement';
			//calling fire mail
			$mailSent = $this->fireMail($toEmail,$toUsername,$subject,$body);
			return $mailSent;
			
		}
		
		/*
		- method for sending mail
		- Auth: Dipanjan
		*/
		function fireMail($toEmail,$toUsername,$subject,$htmlBody)
		{
			$this->mail->From = $this->from;
			$this->mail->FromName = $this->fromname[0];
			$this->mail->addAddress($toEmail, $toUsername);     // Add a recipient
			//$this->mail->WordWrap = 50;   // Set word wrap to 50 characters
			$this->mail->isHTML(true);      // Set email format to HTML
			$this->mail->Subject = $subject;
			$this->mail->Body = $htmlBody;
			//$this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			if(!$this->mail->send()) {
				return 0;
				//echo 'Mailer Error: ' . $this->mail->ErrorInfo;
			} else {
				return 1;
			}
		}
		
		
		
		function sendingMail()
		{
			$this->mail->From = $this->from;
			$this->mail->FromName = 'Mailer';
			$this->mail->addAddress('vdipanjan@gmail.com', 'Dipanjan');     // Add a recipient
			//$this->$mail->addAddress('dipanjan.electrical@gmail.com', 'Dipanjan');   // Name is optional
			$this->mail->WordWrap = 50;   // Set word wrap to 50 characters
			$this->mail->isHTML(true);                                  // Set email format to HTML
			$this->mail->Subject = 'Testing With Class';
			$this->mail->Body    = 'This is the HTML message body <b>in Progress</b>';
			$this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			if(!$this->mail->send()) {
				return 'Message could not be sent.';
				//echo 'Mailer Error: ' . $this->mail->ErrorInfo;
			} else {
				return 'Message has been sent';
			}
		}
	}