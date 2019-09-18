<?php
require_once 'config.php';
session_start();
$email=$_POST['delete'];

// echo $email;
$check=substr($email,-1);
$email=substr($email,0,-1);
echo $check;
echo $email;
if($check==='d')
{
$sql="delete from users where email = '$email'";
if(mysqli_query($link,$sql))
{
    echo "<script> location.href='admin.php'; </script>";
}
else
{
    echo "error";
}
}
else if($check==='a')
{
$sql="update users set status=1 where email='$email'";
if(mysqli_query($link,$sql))
{
    echo "<script> location.href='admin.php'; </script>";
}
else
{
    echo "error";
}
}
?>