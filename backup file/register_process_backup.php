<?php
session_start();
if(isset($_POST['register']))
{     
    require 'dB_connection.php';
    
    $firstName = mysqli_real_escape_string($connect,$_POST['firstname']);
    $lastName = mysqli_real_escape_string($connect,$_POST['lastname']);
    $emailAddress = mysqli_real_escape_string($connect,$_POST['email']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);
    $passwordConfirm = mysqli_real_escape_string($connect,$_POST['password_confirm']);
    $dob = mysqli_real_escape_string($connect,$_POST['dob']);
    
    //Error handlers
    //Check for empty fields
    if(empty($firstName) || empty($lastName) || empty($emailAddress) || empty($password) || empty($passwordConfirm) || empty($dob))
    {
        header("Location: ../index.php/#myRegisterModal/register.php?error=emptyfields&firstname=".$firstName."&lastname=".$lastName."&email=".$emailAddress);
        exit();
    }
    else if(!filter_var($emailAddress,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$firstName) && !preg_match("/^[a-zA-Z0-9]*$/",$lastName))
    {
        header("Location: ../index.php?error=invalidemail&firstname&lastname");
        exit();
    }
    else if(!filter_var($emailAddress,FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../index.php?error=invalidemail&firstname=".$firstName."&lastname=".$lastName);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$firstName) || !preg_match("/^[a-zA-Z0-9]*$/",$lastName))
    {
        header("Location: ../index.php?error=invalidfirstname&lastname&email=".$emailAddress);
        exit();
    }
    else if($password !== $passwordConfirm)
    {
        header("Location: ../index.php?error=passwordcheck&firstname=".$firstName."&lastname=".$lastName."&email=".$emailAddress);
        exit();
    }
    else
    {
       $sql = "SELECT email FROM user_list WHERE email=?";
       $stmt = mysqli_stmt_init($connect);
       if(!mysqli_stmt_prepare($stmt,$sql))
       {
          header("Location: ../index.php?error=sqlerror");
          exit(); 
       }
       else
       {
          mysqli_stmt_bind_param($stmt,"s",$emailAddress);       
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $resultCheck = mysqli_stmt_num_rows($stmt);
          if($resultCheck > 0)
          {
              header("Location: ../index.php?error=usertaken&email=".$emailAddress);
              exit();
          }
          else
          {
              $sql = "INSERT INTO user_list (firstName,lastName,email,password,DOB) VALUES (?, ?, ?, ?, ?)";
              $stmt = mysqli_stmt_init($connect);
              if(!mysqli_stmt_prepare($stmt,$sql))
              {
                header("Location: ../index.php?error=sqlerror");
                exit(); 
              }
              else
              {
                //Hashing the password
                $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt,"sssss",$firstName,$lastName,$emailAddress,$hashedPwd,$dob);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                header("Location: ../index.php?register=success");
                exit();
              }
                
           }
            
        } 
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
}
else
{
    header("Location: ../index.php");
    exit();
}
?>