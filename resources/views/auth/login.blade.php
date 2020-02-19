<!DOCTYPE html>
<html>
<head>
	<title>Kopi Sawah</title>
	<link rel="icon" type="image/png" href="assets/logo.png">
	<link rel="stylesheet" type="text/css" href="assets/css.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link rel="stylesheet" type="text/css" href="assets/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/wow/animate.css">
	<script type="text/javascript" src="assets/jquery.js"></script>
	<style type="text/css">
		@font-face{
			font-family: titillium;
			src:url(../assets/TitilliumWeb-SemiBold.ttf);
		}
		*{
			margin: 0;
			padding: 0;
			font-family: titillium;
		}
	</style>
</head>
<body align="center" style="background-image: url(assets/bgr.jpg); background-size: 100%">
		<div class="login" style="background: rgba(255,255,255,0.85);">
			<div class="padding" style="border: 2px solid black; border-radius: 10px;">
				<div id="clock"></div>
		<script type="text/javascript">
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 	document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }
 
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		</script>
				<h1>LOGIN PAGE</h1>
				<form id="loginapp" action="/postLogin" method="POST">
					{{csrf_field()}}
					<input type="email" name="email" placeholder="Masukkan E-Mail" required="">
					<input type="password" name="password" placeholder="Masukkan Password" required=""><br><br><br>
					<button type="submit"><i class="fa fa-sign-in"></i> Login</button>
					<div class="both"></div>
				</form>
			</div>
		</div>
</body>
</html>
