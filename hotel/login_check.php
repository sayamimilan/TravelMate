<?php
session_start();
include 'mysql_connect.php';

if(isset($_POST["username"], $_POST["password"])){
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $username = validate($_POST["username"]);
  $password = validate($_POST["password"]);

  if(empty($username)){
    header("Location: login.php?error=*User Name is required");
	  exit();
  }else if(empty($password)){
    header("Location: login.php?error=*Password is required");
    exit();
  }else{
    // hashing the password
    // $password = md5($password);

    $sql = "SELECT * FROM users WHERE username='$username' AND password= '$password'";
    $result = $conn->query($sql);
    if($result->num_rows == 1 ){    
      $row = $result->fetch_assoc(); 
        $_SESSION['id'] = $row['id'];
        $_SESSION['is_logged_in']="true";

        echo '<script type="text/javascript">
                window.location = "hotels.php"
              </script>';      
    }else{
    header("Location: login.php?error=Incorrect username or password");
    exit();
  }
}

}else{
  header("Location: login.php");
  exit();
}

?>