<?php 
include "classes/LiquenImg.php";
$lii=new LiquenImg(); 
$lii->getImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>280,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100,
	'width'=>267,// 2/3 of the original size
	'height'=>180, // not in the same aspect ratio, will make extra white space
	'b'=>'0x553333'
	)); 
?>