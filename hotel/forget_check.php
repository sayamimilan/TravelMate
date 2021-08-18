<?php
session_start();
require 'mysql_connect.php';

if(isset($_POST['email']) && isset($_POST['newpassword']) && isset($_POST['newrepassword'])) {
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $email = validate($_POST['email']);
  $pass = validate($_POST['newpassword']);
  $re_pass = validate($_POST['newrepassword']);

  $user_data = '&email='. $email;

    if(empty($email)){
        header("Location: forget.php?error=email is required&$user_data");
        exit();
    }else if(empty($pass)){
        header("Location: forget.php?error=Password is required&$user_data");
        exit();
    }else if(empty($re_pass)){
        header("Location: forget.php?error=Confirmation password is required&$user_data");
        exit();
    }else if($pass !== $re_pass){
        header("Location: forget.php?error=The confirmation password  does not match&$user_data");
        exit();
    }

    else{
        // hashing the password
        // $password = md5($password);

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) <= 0) {
            header("Location: forget.php?error=The email does not exists&$user_data");
            exit();
        }else{
            $sql2 = "UPDATE users SET password = '$pass' WHERE email = '$email'";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
           	 header("Location: forget.php?success=Your password has been changed successfully");
	         exit();
            }else {
	           	header("Location: forget.php?error=unknown error occurred&$user_data");
		        exit();
            }
        }
    }
}else{
  header("Location: login.php");
  exit();
}

?>