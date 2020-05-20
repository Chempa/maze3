<?php
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
	header("Location: ./web-mobile");
	exit();
}
 
// Any tablet device.
if( $detect->isTablet() ){
	header("Location: ./web-mobile");
	exit();
}

header("Location: ./web-desktop");
exit();
 
// Exclude tablets.
// if( $detect->isMobile() && !$detect->isTablet() ){
 	
// }
 
// Check for a specific platform with the help of the magic methods:
// if( $detect->isiOS() ){
 
// }
 
// if( $detect->isAndroidOS() ){
 
// }


 ?>