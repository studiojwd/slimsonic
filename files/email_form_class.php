<?php include_once( "constants.php" ); ?>
<?php
	class email_form
	{
		var $from = '';
		var $message = '<table border="1" cellpadding="5" cellspacing="0">';
		
		function email_form()
		{
			foreach( $_POST as $key => $var )
			{
				if( $key == "submit_email_form" ) break;
				$this->message .= "<tr><td>{$key}</td><td>{$var}</td></tr>";
				global $$key;
				$$key = $var;
			}
			$this->message .= "</table>";
			$this->from = $Email;
		}
		
		function send_email( $subject )
		{
			if( mail( ENQUIRY_EMAIL, $subject, $this->message, EMAIL_HEADERS . $this->from ) )
			{
				return true;
			}
			return false;
		}
	}
?>
