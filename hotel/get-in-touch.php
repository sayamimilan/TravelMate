<?php 
    session_start();
    require 'mysql_connect.php';

    if(isset($_POST['email'])
        && isset($_POST['message'])){
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $email = validate($_POST['email']);
            $message = validate($_POST['message']);

            function function_alert($msg) { 
                echo "<script>alert('$msg');</script>"; 
            } 

            $user_data = '&email='. $email. '&message='. $message;

            if (empty($email)) {
                header('Location: index.php?error=Email is required&$user_data');
                exit();
            }else if(empty($message)){
                header("Location: index.php?error=Message should not be empty&$user_data");
                exit();
            }else{
                $sql = "INSERT INTO getintouch(email, message) VALUES('$email', '$message')";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    // function_alert("Sent Successfully"); 
                    header('Location: index.php?success=Message sent successfully');
                    exit();  
                }                          
            }
        }else{
            header("Location: index.php");
            exit();
        }
?>

