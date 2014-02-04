<?php
	session_start();
	if(isset($_SESSION['email'])){
		header('Location: exampage/index.php'); 
	}
?>
<html>
	<head>
	<title>Online Exam</title>
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>
	<body>
		<div>
			<div>
				<div>
					<form method = "post" id = "logForm" action = "page/logProcess.php">
					<input type = "email" placeholder = "email" id = "userlog" name = "userlog"><br>
					<input type = "password" placeholder = "password" id = "passlog" name = "passlog"><br>
					<button id = "loginbtn">Login</button>
					</form>
					<div id = "warning"></div>
				</div>
			</div>
			<hr>
			<div id = "regField">
				<div>
					<form method = "POST" action = "page/regProcess.php" id = "regForm">
						<table >
						<tr>
							<td id = "td">First Name:</td> <td><input type = "name" placeholder = "First Name" name = "fname" id = "fname"></td>
						</tr>
						<tr>
							<td id = "td">Middle Name:</td> <td><input type = "name" placeholder = "Middle Name" name = "mname" id = "mname"></td>
						</tr>
						<tr>
							<td id = "td">Last Name:</td> <td><input type = "name" placeholder = "Last Name" name = "lname" id = "lname"></td>
						</tr>
						<tr>
							<td id = "td">Your Email:</td> <td><input type = "email" placeholder = "Email Address" name = "email" id = "email"></td>
						</tr>
						<tr>
							<td id = "td">Password:</td> <td><input type = "password" placeholder = "Password" name = "pass" id = "password"></td>
						</tr>
						<tr>
							<td id = "td">Confirm Password:</td><td><input type = "password" placeholder = "Confirm Password" name = "pass1" id = "password1"></td>
						</tr>
						<tr>
							<td></td><td><button id = "reg">Register</button></td>
						</tr>
						</table>
					</form>
				</div>
				<div id = "ack">
					Please fill up all fields
				</div>
			</div>
	</div>
		<script type="text/javascript" src="assets/js/jquery.1.10.2.js"></script>
		<script type="text/javascript" src="assets/js/reg.js"></script>
		<script type="text/javascript" src="assets/js/log.js"></script>
	</body>

<footer>Copyright © 2014–2015 Online Exam®</footer>
</html>