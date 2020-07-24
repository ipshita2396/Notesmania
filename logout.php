<?php

session_start();
if(isset($_SESSION['email'])){

	session_destroy();
	header('location: index.php');
}
if(isset($_SESSION['uname'])){

	session_destroy();
	header('location: admin.php');
}