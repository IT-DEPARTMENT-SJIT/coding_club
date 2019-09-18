<?php

$link=mysqli_connect("localhost","admin","admin","coding_club");

if($link === false)
{
  die("Error connecting Database".mysqli_connect_error());
}

?>