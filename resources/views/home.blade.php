<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kopi Sawah</title>
	<link rel="icon" type="image/png" href="assets/logo.png">
	<link rel="stylesheet" type="text/css" href="assets/css.css">
	<link rel="stylesheet" type="text/css" href="assets/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/wow/animate.css">
	<style type="text/css">
		@font-face{
		  font-family: titillium;
		  src:url(assets/TitilliumWeb-SemiBold.ttf);
		}
    	*{margin: 0;padding: 0;font-family: titillium;}
    	@keyframes muncul{
  			0%{opacity: 0;}
  			100%{opacity: 1;}
		}
		body{overflow: hidden;animation-name: muncul;animation-duration: 2s}
		.both{clear: both;}
		.loginpage{position: fixed;background:url("assets/img/wp.jpg");height: 100%;width: 100%;background-size: 100%;}
		.padding{padding:20px 25px;}
		.login{margin-top: 8%; width: 400px;background:#fff;height: 100%; border-radius: 10px;}
		.login input,.login select,.login button{width: 100%;box-sizing: border-box;margin-bottom: 20px;border: 0px;padding: 10px;border-bottom: 1px solid #e4e7ea;outline: 0;color: #565656;font-size: 14px;}
		.login input:focus,.login select:focus{border-bottom: 3px solid #707cd2;transition: 0.2s}
		.login select{cursor: pointer;}
		.login button{cursor: pointer;background: #41b3f9;color: #fff;font-size: 20px;border-radius: 3px; transition: 600ms all;}
		.login button:hover{background: #5bc0de; border-radius: 50px; transform: scale(0.95);}
		form{margin-top: 70px;}
		h3{text-align: center;}
		#status{width: 100%;color: #565656;font-size: 15px;display: none;box-sizing: border-box;border-radius: 3px}
		.red{color: #c7254e;background: #f9f2f4;padding: 10px;border-radius: 3px;}
		.green{color: rgb(1,186,56);background: rgb(230,255,230);padding: 10px;border-radius: 3px;}
		.link-forgot{color: #565656;padding: 0px 0px 20px 0px;display: inline-block;}
	</style>
	<script type="text/javascript" src="assets/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#loginapp").submit(function(){
				$.ajax({
					type:'POST',
					url:'handler.php?action=login',
					data:$(this).serialize(),
					success:function(data){
						$("#status").fadeIn(100);
						$("#status").html(data);
						window.setTimeout(function(){$('#status').fadeOut(100)},3000);

					}
				})
				return false;
			});
		});
	</script>
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
				<form id="loginapp">
					<input type="text" name="username" placeholder="Masukkan Username">
					<input type="password" name="pass" placeholder="Masukkan Password">
					<label>Login Sebagai : </label>
					<select name="loginas" required="required">
						<option value="1">Admin</option>
						<option value="2">Kasir</option>
					</select>
					<button type="submit"><i class="fa fa-sign-in"></i> Login</button>
					<div class="both"></div>
				</form>
				<div id="status"></div>

			</div>
		</div>
</body>
</html>
