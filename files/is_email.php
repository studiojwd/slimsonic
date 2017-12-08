<?php
	function is_email( $email )
	{
		return  (ereg ('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$', $email));
	}
?>