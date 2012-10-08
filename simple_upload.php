<?php 

/*
 * jQuery File Upload Plugin PHP Example 5.7 
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
 
 //********************* Modified by Agustin Amenabar

switch ($_SERVER['REQUEST_METHOD']) {
    case 'OPTIONS':
    case 'HEAD':
    case 'GET':
        break;
    case 'POST':
    	error_reporting(E_ALL | E_STRICT);

		require('classes/UploadImg.php');

		$upload_handler = new UploadImg();

		header('Pragma: no-cache');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Content-Disposition: inline; filename="files.json"');
		header('X-Content-Type-Options: nosniff');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, POST');
		header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');
        $upload_handler->post();
        break;
    default:
        header('HTTP/1.1 405 Method Not Allowed');
}
?>