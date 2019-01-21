<?php
if (isset($_GET['controller'])) {
 	switch ($_GET['controller']) {
 		case 'user':
 			require "controller/user/controller.php";
 			break;
 		
 		default:
 			# code...
 			break;
 	}
 }else {
 	# code...
 }
 ?>