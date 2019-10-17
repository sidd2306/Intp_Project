<?php 
session_start();


$passd="";
  $con=mysqli_connect('localhost','root',$passd,'userregistration');
  mysqli_select_db($con, 'userregistration');


$emid = isset($_GET['emaid']) ? $_GET['emaid'] : '';
$pass = isset($_GET['pswd']) ? $_GET['pswd'] : '';

/*if($emid && $pass){
    echo "ok";
}
else{
    echo "fail";
}*/

$_SESSION['emaid']=$_GET['emaid'];
$s = "select * from usertable where email_id = '$emid' && password = '$pass'";

/*$name="select first_name from usertable where email_id = '$emid'";
$nameprint=mysqli_query($con,$name);*/

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
   header('location:takedel.html');
    
    
}else{
   echo "You have not registered, kindly register first";
}
?>
