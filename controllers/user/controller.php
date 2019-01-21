<?php
if (isset($_GET['action'])) {
 	switch ($_GET['action']) {
 		case 'user':
 			require "controller/user/add.php";
 			break;
 		case 'list':
 			require "controller/user/list.php";
 			break;
 	}
 }else {
 	# code...
 }
 ?>