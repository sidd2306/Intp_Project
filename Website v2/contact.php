<?php
  $user="root";
  $pass="";
  $db="contact";

  $con=new mysqli("localhost",$user,$pass,$db) or die("unable to connect");
  //echo "Connection established";



  mysqli_query($con,"create table if not exists contact(name varchar(40) primary key, email varchar(40), subject varchar(50),message varchar(500));");

$n = isset($_GET['name']) ? $_GET['name'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$sub = isset($_GET['subject']) ? $_GET['subject'] : '';
$mes = isset($_GET['message']) ? $_GET['message'] : '';
  /*$n=$_GET['name'];;
  $email=$_GET['email'];
  $sub=$_GET['subject'];
  $mes=$_GET['message'];*/

  mysqli_query($con,"insert into contact values('$n','$email','$sub','$mes');");
  echo "<br>Your response has been recorded";
 

?>