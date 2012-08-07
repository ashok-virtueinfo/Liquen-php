<?php 
$autor = 'Médula Diseño';
$webDelAutor = 'http://medula.cl/';
$nombreMarca = 'Liquen Image Manipulation';//'Super Tienda';
$sloganMarca = 'Simple PHP Class for manipulating images';
$codigoPostal = '';//'7788990';
$direccionFisica = '';//'Calle numero<br>'.$codigoPostal.' Comuna<br>Ciudad, Chile';//http://medula.cl/blog/2012/07/07/formato-de-una-direccion-postal-en-chile/
$telefono = '';// '+56(2)234 5678';
$dominioSitio = ''; //'medula.cl';
$home = 'http://'.$dominioSitio.'/';
$mailAministrador = 'agustin@fliin.com';
$mailWebmaster = 'agustin@medula.cl';
$redire = 'http://'.$dominioSitio.'/';
if(isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'],'localhost')!==false)$redire = 'http://localhost/';//gregar la carpeta local
?>