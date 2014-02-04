<?php
	session_start();
	include_once('../dao/config.php');
    include_once('../dao/examDAO.php');
 	$_SESSION['next'] = 1;
 	$_SESSION['answers'] = "";
 	$_SESSION['score'] = null;
 	$_SESSION['points'] = 0;
 	$userlog = mysql_real_escape_string($_POST['userlog']);
 	$passlog = mysql_real_escape_string(sha1($_POST['passlog']));
 	
	if((!empty($userlog))&&(!empty($passlog))){
		$login = ExamDAO::logUser($userlog, $passlog);
		$_SESSION['email'] = ($_POST['userlog']);
		
	}else{
		echo "failed to login -from php";
	}
	
?>