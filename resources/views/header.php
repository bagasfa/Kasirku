<?php 
include "root.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image/png" href="assets/logo.png">
	<link rel="stylesheet" type="text/css" href="assets/index.css">
	<link rel="stylesheet" type="text/css" href="assets/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/awesome/css/beyond_the_mountains-webfont.css" type="text/css"/>
	<script type="text/javascript" src="assets/jquery.js"></script>
	<script>
		function welcome(){
			alert("Ini halaman yang saya harapkan setelah login sebagai admin :)");
		}
	</script>
</head>
<body onload="welcome()">

<div class="sidebar" style="background: #d8d8d8; border-right: 2px white;">
	<center><h3>KOPI SAWAH</h3></center>
	<ul>
		<li class="admin-info">
			<img src="assets/logo.jpg">
		</li>
		<li><a id="barang" href="menu.php"><i class="fa fa-bars"></i> Menu</a></li>
	</ul>
</div>