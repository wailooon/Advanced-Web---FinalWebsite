<?php

session_start();

if(isset($_POST['login'])){
    require 'dB_connection.php';
    
    $email = mysqli_real_escape_string($connect,$_POST['loginEmail']);
    $password = mysqli_real_escape_string($connect,$_POST['loginPassword']);
    
    //error handlers
    //Check for empty fields
    if(empty($email) || empty($password)){
        header("Location: ../index.php?error=emptyfields");
        exit();
    }else{
        $sql = "SELECT * FROM user_list WHERE email='$email'";
        $stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"ss",$email,$password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result))
            {
               $pwdUnhashed = password_verify($password,$row['password']);
                if($pwdUnhashed == false)
                {
                   header("Location: ../index.php?error=wrongpassword");
                   exit(); 
                }
                else if($pwdUnhashed == true)
                {
                    session_start();
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION['lastName'] = $row['lastName'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['dob'] = $row['DOB']; 
                    
                    header("Location: ../index.php?login=success");
                    exit(); 
                }
                else
                {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
                    
                    
                    
                }
            }
        }
}
else
{
    header("Location: ../hotel_website/index.php");
    exit();
}
?>