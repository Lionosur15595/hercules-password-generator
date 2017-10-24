<?php
$arrr = $_GET["length1"];
function rand_string( $length ) {
	

    $chars = "121724937935430059!@#$%^&*())abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$chars = md5($chars);	
    return substr(str_shuffle($chars),0,$length);

}

echo rand_string($arrr);
?>
