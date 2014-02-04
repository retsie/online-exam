<?php
	session_start();
	include_once('../dao/config.php');
    include_once('../dao/examDAO.php');
    if($_SESSION['next'] < 10){
    	header('Location: index.php');
    }else{
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>
	<div>
		<div id = "signin">
			<?php echo "Sign in as ".$_SESSION['email']; ?>
			<div id = "logout"><a href="../page/logout.php">Logout</a></div>
		</div>
		<hr>
		<div id = "questField">
		<?php echo "Your Answers:"."<br>";
			$ans = explode("-", $_SESSION['answers']);
				for($i = 1; $i<11; $i++ ){
					echo "\n".$i."). ".$question = ExamDAO::getQuestion($i)." ";
					echo " ".$ans[$i]."<br>"; 
				}
	}
		 ?>
	
	<div> 
		<?php echo "Your score is: ".$_SESSION['score']; ?>
	</div>
	</div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>