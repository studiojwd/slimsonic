<?php
@include( '../dev_mode.php' );
@include( '../../dev_mode.php' );

if( defined( 'DEV_MODE' ) )
{
	define( 'ENQUIRY_EMAIL', 'jon@studiojwd.com' );
	define( 'TIME_DIFF', 0 );
}
else
{
	define( 'ENQUIRY_EMAIL', 'jon@studiojwd.com' );
	define( 'TIME_DIFF', -1*60*60 );
}
define( 'EMAIL_HEADERS' , "Mime-Version: 1.0\nContent-Type: text/html;charset=ISO-8859-1\nContent-Transfer-Encoding: 7bit\nFROM: " );
define( 'ENQUIRY_SUBJECT', 'FSOS Contact Form' );
?>
