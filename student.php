<?php

class Student{
	public function saveStudentInfo($data){
		$hostName = 'localhost';
		$userName = 'root';
		$passWord = '';
		$dbName = 'db_student_info';
		
		$connection = mysqli_connect($hostName, $userName, $passWord, $dbName);
		
		$sql = "INSERT INTO tbl_student(student_name,phone_number,email_address,student_address) VALUES('$data[student_name]','$data[phone_number]','$data[email_address]','$data[student_address]')";
		
		
		if(mysqli_query($connection, $sql)){
			$message = '<b>Student info saved.<b>';
			return $message;
		}else{
			die('Query Problem'.mysqli_error($connection));
		}
	}
}


?>