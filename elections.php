<html>
<!--
 __   __   ______     ______   ______               
/\ \ / /  /\  __ \   /\__  _\ /\  ___\              
\ \ \'/   \ \ \/\ \  \/_/\ \/ \ \  __\              
 \ \__|    \ \_____\    \ \_\  \ \_____\            
  \/_/      \/_____/     \/_/   \/_____/            
                                                    
 ______     ______     __    __                     
/\  ___\   /\  __ \   /\ "-./  \                    
\ \___  \  \ \  __ \  \ \ \-./\ \                   
 \/\_____\  \ \_\ \_\  \ \_\ \ \_\                  
  \/_____/   \/_/\/_/   \/_/  \/_/                  
                                                    
 __  __     __     __   __     ______     ______    
/\ \_\ \   /\ \   /\ "-.\ \   /\  ___\   /\  == \   
\ \  __ \  \ \ \  \ \ \-.  \  \ \  __\   \ \  __<   
 \ \_\ \_\  \ \_\  \ \_\\"\_\  \ \_____\  \ \_\ \_\ 
  \/_/\/_/   \/_/   \/_/ \/_/   \/_____/   \/_/ /_/
-->
<head>
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
h1 {
	font-family: 'Audiowide', serif;
}
.center {
	display: block;
	margin-left: auto;
	margin-right: auto;
	padding: 0;
	text-align: center;
}
.guide {
	margin-left: 100px;
	margin-right: 100px;
	padding: 50;
	padding-top: 15;
	padding-bottom: 15;
	background-color: efefef;
	text-align: center;
	font-family: 'Audiowide', sans-serif;
	font-size: 17px;
	border-style: solid;
	border-color: 2d5ca9;
	border-width: 0px 3px 0px 3px;
}
.tabArea {
	margin-top: 50px;
	margin-left: 100px;
	margin-right: 100px;
}
.tabArea input {
    width: 33.333333%;
    float: left;
	height: 55px;
	font-family: 'Audiowide', serif;
	font-size: 30px;
	background-color: 4285f4;
	border-style: solid;
	border-color: 2d5ca9;
	cursor:pointer;
}
form {
	margin-bottom: 0px;
}
.clearFix{
    clear:both
}
.first {
	border-width: 6px 3px 6px 6px;
	border-top-left-radius: 10px
}
.mid {
	border-width: 6px 3px 6px 3px;
}
.last {
	border-width: 6px 6px 6px 3px;
	border-top-right-radius: 10px
}
.peopleTabs {
	margin-left: 100px;
	margin-right: 100px;
}
.peopleTabs button {
    width: 33.333333%;
    float: left;
	height: 40px;
	font-family: sans-serif;
	font-size: 25px;
	background-color: f1c232;
	border-style: solid;
	border-color: b89426;
	cursor:pointer;
}
.view {
	display: none;
}
.space {
	margin-left: 100px;
	margin-right: 100px;
	padding: 50;
	padding-top: 50;
	padding-bottom: 15;
	background-color: efefef;
	border-style: solid;
	border-color: 2d5ca9;
	border-width: 0px 3px 3px 3px;
}

</style></head><body>


<div class='center'>
	<h1>SIHS Team Fury</h1>
	<img src='images/teamfurylogo.png' alt='SIHS Team Fury Logo' width='337' height='200'>
</div>

<div class='tabArea'>
	<form method='post'>
		<input type='submit' value='Home' name='home' class='first'>
		<input type='submit' value='Elections' name='elect' class='mid'>
		<input type='submit' value='Contact Us' name='contact' class='last'>
	</form>
	<div class="clearFix"></div>
</div>

<div class='guide'>
<h2>Click on one of the following Candidates to see their campaign.</h2>
</div>

<div class='peopleTabs'>
	<button onclick="displayPage('hiner')">Sam Hiner</button>
	<button onclick="displayPage('swarna')">Pranav Swarna</button>
	<button onclick="displayPage('valentino')">AJ Valentino</button>
</div>

<div>
	<div id='blank'>
		<div class='space'>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
	<div id='hiner' class='view'>
		<div class='space'>
			<?php echo 'hi'; //include('hiner.php') ?>
		</div>
	</div>
	<div id='swarna' class='view'>
		<div class='space'>
			<p class='center'>This placeholder page is courtesy of the Sam Hiner for Engineering Chair Foundation. It will be replaced with Pranav Swarna's campgain once he uses the Hiner Website Building Tool™ to create his page.</p>
		</div>
	</div>
	<div id='valentino' class='view'>
		<div class='space'>
			<p class='center'>This placeholder page is courtesy of the Sam Hiner for Engineering Chair Foundation. It will be replaced with AJ Valentino's campgain once he uses the Hiner Website Building Tool™ to create his page.
		</div>
	</div>
</div>
	
<script>
function displayPage (name) {	
	document.getElementById(name).style.display = 'block';
	if (name == 'hiner') {
		document.getElementById('swarna').style.display = 'none';
		document.getElementById('blank').style.display = 'none';
		document.getElementById('valentino').style.display = 'none';
	} else if (name == 'swarna') {
		document.getElementById('hiner').style.display = 'none';
		document.getElementById('valentino').style.display = 'none';
		document.getElementById('blank').style.display = 'none';
	} else if (name == 'valentino') {
		document.getElementById('hiner').style.display = 'none';
		document.getElementById('swarna').style.display = 'none';
		document.getElementById('blank').style.display = 'none';
	}	
}
</script>
</body></html><?php

if(isset($_POST[elect])) {
	header("location:elections.php");
}
if(isset($_POST[contact])) {
	echo '<script>alert("This section is under construction. Contact us at sihsteamfury@gmail.com");</script>';
}
?>