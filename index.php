<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. Ojo con el lang-->

<head>
	<!-- Sólo si la codificación no puede ser definida en los encabezados del servidor (.htaccess)
	<meta charset="utf-8"> -->
	<!-- Descomentar sólo si no hay .htaccess 
	Uncomment only if there is no .htaccess
	More info: h5bp.com/b/378 
	Forzar el motor de renderizado más reciente en IE y Chrome Frame
	Always force latest IE rendering engine (even in intranet) & Chrome Frame 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
	
	<title><?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>
	
	<meta name="description" content="A Class for resizing, cropping and rotating images using GD.">
	<!-- Google will often use this as its description of your page/site. Make it good or delete it. -->
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	
	<!--<meta name="google-site-verification" content="">
	 Speaking of Google, don't forget to set your site up: http://google.com/webmasters 
	 Mejor dejar esto como un recordatorio de agregar el sitio en webmasters, recomiendo usar el archivo independiente de verificación
	 Better leave this as a reminder, I'd recommend using the downloadable .html to verify with google. -->
	<?php include "views/viewport-fav-setup.php"; ?>
	
	<!-- CSS: pantalla, mobile & impreso están en el mismo archivo / screen, mobile & print are all in the same file
	This isn't a full reset nor just a full normalize, it adds default and commonly accepted style definitions plus our prefferences
	generated with Compass
	Este no es un reset completo como el de Eric Mayer, ni tampoco un normalize solamente estandariza definiciones comunmente aceptada, como cuerpos de texto, más preferencias nuestras. 
	generado con Compass -->
	<link rel="stylesheet" href="_/css/styles.css">
	
	<!-- all our JS is at the bottom of the page, except for Modernizr and Respond.js. 
	Todo el javascript debe ir al pie de la página, excepto por modernizr y Respond.js -->
	<?php include "views/modernizr.php"; ?>

</head>

<body>

<!-- STICKY FOOTER ENABLED -->
<div class="amictus">
	<div class="wrapper">

	<header>
		<div id="logoTop"><img src="imgs/logo-liquen.png" width="25%" alt="Logotipo <?php echo $nombreMarca; ?>"></div>
		<h1>Liquen Image Resize Class</h1>
		<h2>Cropping</h2>
		<nav>
		
		</nav>
	
	</header>
	
	<div class="corporis">
		<?php 
include "classes/LiquenImg.php";
$lii=new LiquenImg(); 
$dirFoto=$lii->genImage(array(
	'url'=>'la cuchilla.jpg',
	'oc'=>'1',
	'width'=>'300'
	));
$fotoDos=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'width'=>'250'
	));

$fotoTres=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120
	));

$fotoCuatro=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100
	));

$fotoCinco=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>350,
	'ch'=>220,
	'cx'=>400,
	'cy'=>100,
	'width'=>230
	));

$fotoSeis=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>150,
	'ch'=>250,
	'cx'=>460,
	'cy'=>100,
	'height'=>230
	));

$fotoSiete=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100,
	'width'=>167,// 2/3 of the original size
	'height'=>80 // if it is proportionate no need for this value
	));

$fotoOcho=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100,
	'width'=>167,// 2/3 of the original size
	'height'=>180 // not in the same aspect ratio, will make extra white space
	));

$fotoNueve=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100,
	'width'=>167,// 2/3 of the original size
	'height'=>40 // not in the same aspect ratio, will make extra white space
	));

$fotoDiez=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100,
	'width'=>167,// 2/3 of the original size
	'height'=>180, // not in the same aspect ratio, will make extra white space
	'b'=>'0x553333'
	));
?>		
			<ul class="ejemplos">
				<li><code>
						<pre>
include "classes/LiquenImg.php";
$lii=new LiquenImg(); 
						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $dirFoto; ?>">
					<figcaption><?php echo $dirFoto; ?></figcaption>
				</figure>
					<code>
						<pre>
$dirFoto=$lii->genImage(array(
	'url'=>'la cuchilla.jpg',
	'oc'=>'1',
	'width'=>'300'
	));
						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $fotoDos; ?>">
					<figcaption><?php echo $fotoDos; ?></figcaption>
				</figure>
					<code>
						<pre>
$fotoDos=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'width'=>'250'
	));
						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $fotoTres; ?>">
					<figcaption><?php echo $fotoTres; ?></figcaption>
				</figure>
					<code>
						<pre>
$fotoTres=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120
	));
						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $fotoCuatro; ?>">
					<figcaption><?php echo $fotoCuatro; ?></figcaption>
				</figure>
					<code>
						<pre>
$fotoCuatro=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100
	));
						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $fotoCinco; ?>">
					<figcaption><?php echo $fotoCinco; ?></figcaption>
				</figure>
					<code>
						<pre>
$fotoCinco=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>350,
	'ch'=>220,
	'cx'=>400,
	'cy'=>100,
	'width'=>230
	));
						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $fotoSeis; ?>">
					<figcaption><?php echo $fotoSeis; ?></figcaption>
				</figure>
					<code>
						<pre>
$fotoSeis=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>150,
	'ch'=>250,
	'cx'=>460,
	'cy'=>100,
	'height'=>230
	));


						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $fotoSiete; ?>">
					<figcaption><?php echo $fotoSiete; ?></figcaption>
				</figure>
					<code>
						<pre>
$fotoSiete=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100,
	'width'=>167,// 2/3 of the original size
	'height'=>80 // if it is proportionate no need for this value
	));
						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $fotoOcho; ?>">
					<figcaption><?php echo $fotoOcho; ?></figcaption>
				</figure>
					<code>
						<pre>
$fotoOcho=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100,
	'width'=>167,// 2/3 of the original size
	'height'=>180 // not in the same aspect ratio, will make extra white space
	));
						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $fotoNueve; ?>">
					<figcaption><?php echo $fotoNueve; ?></figcaption>
				</figure>
					<code>
						<pre>
$fotoNueve=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100,
	'width'=>167,// 2/3 of the original size
	'height'=>40 // not in the same aspect ratio, will make extra white space
	));
						</pre>
					</code></li>
				<li><figure>
					<img src="<?php echo $fotoDiez; ?>">
					<figcaption><?php echo $fotoDiez; ?></figcaption>
				</figure>
					<code>
						<pre>
$fotoDiez=$lii->genImage(array(
	'url'=>'upload/la cuchilla.jpg',
	'oc'=>'1',
	'cw'=>250,
	'ch'=>120,
	'cx'=>400,
	'cy'=>100,
	'width'=>167,// 2/3 of the original size
	'height'=>180, // not in the same aspect ratio, will make extra white space
	'b'=>'0x553333'
	));
						</pre>
					</code></li>
			</ul>
			<hr>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="uploadTest" method="multipart/form-data">
			<label >Select Image File To Upload: <input type="file" name="image"></label>
		</form>
	</div>

	
</div>

<div class="urgeo"></div>
</div>
<footer>	
	<div class="wrapper">
		<p><small>&copy; Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. MIT Licenced.</small></p>
	</div>
</footer>
<?php require("views/javascript-al-pie.php"); ?>  
</body>
</html>