<?php 	
	session_start();
	include_once('../dao/config.php');
    include_once('../dao/examDAO.php');
    $ans = $_POST['option'];
    $_SESSION['answers'] .= "-".$_POST['option'];
    if(!empty($ans)){
    	examDAO::countCorrect($ans);
    	$_SESSION['next']++;
    	header('Location: ../exampage/index.php');
    }
    else{
    	header('Location: ../exampage/index.php');
    }

?>