<?php

require_once 'config.php';

session_start();

if(isset($_POST['submit']))
{

    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $sql="select * from users where email='$email'";
    $result=mysqli_query($link,$sql);
    $row=$result->fetch_assoc();
    
    if(!$row)
        {
            $msg="Invalid User";
            echo "<script>alert('$msg');</script>";
            echo "<script> location.href='login.php'; </script>";
        }
    
    if($email==="hod@it.com" and password_verify($pass, $row['password']))
    {
        $_SESSION['email']=$email;
        $_SESSION['name']=$row['firstname'];
        echo "<script> location.href='admin.php'; </script>";
    }
    else if($row['status']==0)
    {
            $msg="User Account Not Activated";
            echo "<script>alert('$msg');</script>";
            echo "<script> location.href='login.php'; </script>";
    }
    else if(password_verify($pass, $row['password']))
        {
            $_SESSION['email']=$email;
            $_SESSION['name']=$row['firstname'];
            echo "<script> location.href='home.php'; </script>";
        }
    else    
        {
            $msg="Invalid Password";
            echo "<script>alert('$msg');</script>";
            echo "<script> location.href='login.php'; </script>";
        }
   

}

?>