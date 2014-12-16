<?php

	$fileName = '/home/bitnami/htdocs/media/tmp/instagram.static.txt';

	// include Instagram class
	include_once('/home/bitnami/htdocs/wordpress/wp-content/themes/wildfang/inc/wildfang.instagram.php');
	$fileContents = fetchInstagramGrid( "wearewildfang", 12 ); 
	
	if (strlen($fileContents)>100) {
		// Write the contents back to the file
		$bytes = file_put_contents($fileName, $fileContents);
	}
?>
