@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Dashboard Kopi Sawah";
	document.getElementById('dash').classList.add('active');
</script>
<div class="content" style="background-image: url('assets/bgr.jpg'); background-repeat: no-repeat; background-size: 120%;">
	<div class="padding" style="text-align: center; height: 800px; color: white;">
		<br><br>
		<hr>
		<marquee><h1>SELAMAT DATANG DI KOPI SAWAH, TEMPAT DIMANA KITA BEBAS BERSANTAI</h1></marquee>
		<hr>
		<br>
		@if(Session::has('message'))
		<div style="font-size: 24pt; color: #3cff00;">
			{{Session::get('message')}}
		</div> 
		@endif
		<br>
		<center><h1 style="font-family: beyond_the_mountainsregular; font-size: 100px; padding-top: 150px; text-shadow: 4px 6px black;">K O P I  &nbsp; S A W A H</h1></center>
		<br>
		<div style="font-size: 25px; text-shadow: 3px 3px black; border: 3px solid white; margin: 0px 400px; border-radius: 5px;">
		<script type='text/javascript'>
			<!--
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
			//-->
		</script>
		<div id="clock"></div>
		<script type="text/javascript">
		<!--
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
		//-->
		</script>
	</div>
	</div>
</div>
@stop
