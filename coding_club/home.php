<?php

session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
echo $name;
echo $email;
?>