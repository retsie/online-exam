<?php
class ExamDAO{
	public function addUser($fname,$lname,$mname, $email, $pass){
	global $db;
	$res = $db->query("SELECT * FROM users WHERE email IN ('$email')");	
	if($res->num_rows >0){
		echo "Email" ." ". $email ." ". "already taken\n"."";
	}else{
	    $sql = "INSERT INTO `examination`.`users` (`id`, `fname`, 
	    				   	`mname`, `lname`, `email`, `password`) 
	     	  VALUES (NULL, '$fname', '$mname', '$lname', '$email', 
	     	  				'$pass')";
			$result = $db->query($sql);
			if($sql){
				echo "success";
				return $result;
			}else{
				echo "failed ";
			}		
		}
	}

	public function logUser($email, $password){
		global $db;
		$sql="SELECT * FROM users WHERE email = '{$email}' AND 
										password = '{$password}'";
		$result = $db->query($sql);
		if($result->num_rows > 0){
			echo "<script>alert('login Succesfully');window.location.href='exampage/index.php'</script>'";
		}else{
			echo "email and password not match";
		}	
	}

	public static function getQuestion($id){
		global $db;
		if($id <= 10){
			$sql = "SELECT distinct question FROM question_tb WHERE id = '{$id}'";
			$result = $db->query($sql);
			if($result){
				while($row = $result->fetch_assoc()){
					return $row['question'];
				}
			
			}else {
				return false;
			}
		}	
	}

	public static function getChoices($id){
		global $db;
			$sql = "SELECT  * FROM choices_tb WHERE id_fk = '{$id}'";
			$result = $db->query($sql);
			if ($result->num_rows > 0){
				$ans = array();
				for ($i = 0; $i < $result->num_rows; $i++) {
					$row = $result->fetch_assoc();
					$ans[$row['id']] = $row['answer'];
				}
				$result->free();
				return $ans;
			}else {
			return false;
			}	
	}

	public static function countCorrect($answer){
		global $db;
		$sql = "SELECT  * FROM choices_tb WHERE answer = '{$answer}' and is_correct = '1'";
		$result = $db->query($sql);
		if($result->num_rows > 0){
			session_start();
			$_SESSION['score']++ ;
		}else{
			return false;
		}
	}

	public static function compareAnswer($id){
		global $db;
		$sql = "SELECT answer FROM `choices_tb` WHERE `is_correct` = '1' AND `id_fk` = '{$id}'";
		$result = $db->query($sql);
			if ($result->num_rows > 0){
				$ans = array();
				for ($i = 0; $i < $result->num_rows; $i++) {
					$row = $result->fetch_assoc();
					$ans[$row['id']] = $row['answer'];
				}
				$result->free();
				return $ans;
			}else {
			return false;
			}	
	}
}

?>