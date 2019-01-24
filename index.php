<?php
if (isset($_GET['controller'])) {
 	switch ($_GET['controller']) {
 		case 'user':
 			require "controllers/user/controller.php";
 			break;
 	}
 }else {
 	# code...
 }
 ?>