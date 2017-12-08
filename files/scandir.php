<?php

	// php 4 scandir function (doesn't include directories, sorts alphabetically)
	// Don't forget a '/' at end of $dir or will return directories under Linux

	function scandir_php4( $dir )
	{
		$files = array();
		$dh = @opendir( $dir );
		if( $dh != FALSE )
		{
			while( false !== ( $filename = readdir( $dh ) ) )
			{
				if( !is_dir( $dir . $filename ) )
				{
					$files[] = $filename;
				}
			}
			sort( $files );
			closedir( $dh ); 
		}
		return $files;
	} 

?>
