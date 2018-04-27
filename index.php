<html>
<!--
 /$$$$$$$$                                      /$$$$$$$$
|__  $$__/                                     | $$_____/
   | $$  /$$$$$$   /$$$$$$  /$$$$$$/$$$$       | $$    /$$   /$$  /$$$$$$  /$$   /$$
   | $$ /$$__  $$ |____  $$| $$_  $$_  $$      | $$$$$| $$  | $$ /$$__  $$| $$  | $$
   | $$| $$$$$$$$  /$$$$$$$| $$ \ $$ \ $$      | $$__/| $$  | $$| $$  \__/| $$  | $$
   | $$| $$_____/ /$$__  $$| $$ | $$ | $$      | $$   | $$  | $$| $$      | $$  | $$
   | $$|  $$$$$$$|  $$$$$$$| $$ | $$ | $$      | $$   |  $$$$$$/| $$      |  $$$$$$$
   |__/ \_______/ \_______/|__/ |__/ |__/      |__/    \______/ |__/       \____  $$
                                                                           /$$  | $$
                                                                          |  $$$$$$/
                                                                           \______/
-->
<head>
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
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

	<div class='border'>
		<p>Our Members</p>
		<ul class="font">
			<li>Martin Blue</li>
			<li>Indra Gottiveeti</li>
			<li>AJ Valentino</li>
			<li>Pranav Swarna</li>
			<li>Ahobil Thuppal</li>
			<li>Sam Hiner</li>
			<li>Breanna Nguyen</li>
			<li>Foluwa Agbebi</li>
			<li>Ian Loh</li>
			<li>Emeline Gilbert</li>
			<li>Julia Mcclean</li>
		</ul>

		<p>FIRST Organization</p>
		<ul>
			<li>Operates FIRST Robotics Competition</li>
			<li>Real world engineering</li>
			<li><a href="https://www.firstinspires.org/robotics/ftc" target="_blank">FIRST Website</a></li>
		</ul>

		<p>Software Development Team</p>
		<ul>
			<li>Build a website using HTML/CSS and Javascript</li>
			<li>Program a robot using Java</li>
		</ul>

		<p>Marketing/Production Team</p>
		<ul>
			<li>Sponsors & Outreach</li>
			<li>Marketing</li>
			<li>Social Media</li>
			<li>Scheduling</li>
		</ul>

		<p>Management Team</p>
		<ul>
			<li>Engineering Notebook</li>
			<li>Manages Tasks and Deadlines</li>
			<li>Sets Objectives</li>
			<li>Creates Presentations</li>
		</ul>

		<p>Engineering Team</p>
		<ul>
			<li>CAD Design</li>
			<li>Technical Presentation</li>
			<li>Physically Building the Robot</li>
		</ul>
	</div>
</body>
</html>

<?php

if(isset($_POST['elect'])) {
	header("location:elections.php");
}
if(isset($_POST['contact'])) {
	echo '<script>alert("This section is under construction. Contact us at sihsteamfury@gmail.com");</script>';
}
?>
