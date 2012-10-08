<?php 

$images = glob("{*.jpg,*.jpeg,*.png,*.gif,*.JPG,*.JPEG,*.PNG,*.GIF}", GLOB_BRACE);

?><!doctype html>
<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. Ojo con el lang-->
<head>
	<!--<meta charset="utf-8"> -->
	<title> </title>
</head>
<body>

<ul>
	<?php foreach ($images as $img): ?>
	<li><?php echo '<a href="'.$img.'">'.$img."</a><br>\n"; ?></li>
	<?php endforeach ?>
</ul>

</body>
</html>