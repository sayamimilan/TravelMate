<?php
session_start();
require 'mysql_connect.php';

if (isset($_POST['username']) 
    && isset($_POST['first_name']) 
    && isset($_POST['last_name']) 
    && isset($_POST['email']) 
    && isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $uname = validate($_POST['username']);
    $fname = validate($_POST['first_name']);
    $lname = validate($_POST['last_name']);
    $email = validate($_POST['email']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);

	$user_data = '&username='. $uname. '&first_name='. $fname. '&last_name='. $lname. '&email='. $email;

	if (empty($uname)) {
		header("Location: register.php?error=User Name is required&$user_data");
	    exit();
    }else if(empty($fname)){
        header("Location: register.php?error=First name is required&$user_data");
	    exit();
    }else if(empty($lname)){
        header("Location: register.php?error=Last name is required&$user_data");
	    exit();
	}else if(empty($email)){
        header("Location: register.php?error=email is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}else if(empty($re_pass)){
        header("Location: register.php?error=Re Password is required&$user_data");
	    exit();
	}else if($pass !== $re_pass){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}else if($uname=="admin" or $uname=="Admin"){
		header("Location: register.php?error=You are not allowed to choose 'Admin' username!&$user_data");
	}
	else{

		// hashing the password
        // $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The email already exists&$user_data");
			exit();
			$sql = "SELECT * FROM users WHERE username='$uname'";
			$result1 = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result1) > 0){
				header("Location: register.php?error=The username already exists, try another&$user_data");
				exit();
			}
		}else {
           $sql2 = "INSERT INTO users(username, first_name, last_name, email, password) VALUES('$uname', '$fname', '$lname', '$email', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=The username already exists, try another&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}
 
// ------------------------------------

?>