<?php 
session_start();


$passd="";
  $con=mysqli_connect('localhost','root',$passd);
  mysqli_select_db($con, 'userregistration');
//$_SESSION['emaid']= isset($_GET['emaid']) ? $_GET['emaid'] : '';['emaid'];
//$_SESSION['fname']= isset($_GET['emaid']) ? $_GET['emaid'] : '';['fname'];
//$_SESSION['lname']= isset($_GET['emaid']) ? $_GET['emaid'] : '';['lname'];
//$_SESSION['contactnum']= isset($_GET['emaid']) ? $_GET['emaid'] : '';['contactnum'];

$firname = isset($_GET['fname']) ? $_GET['fname'] : '';
$lasname = isset($_GET['lname']) ? $_GET['lname'] : '';
$emid = isset($_GET['emaid']) ? $_GET['emaid'] : '';
$contnum = isset($_GET['contactnum']) ? $_GET['contactnum'] : '';
$pass = isset($_GET['pswd']) ? $_GET['pswd'] : '';

$_SESSION['emaid'] = $emid;
$_SESSION['fname'] = $firname;
$_SESSION['lname'] = $lasname;
$_SESSION['contactnum'] = $contnum;

$s = "select * from usertable where email_id = '$emid'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
    echo" This email has been already registered";
}else{
    $reg= " insert into usertable(first_name , last_name , email_id , contact_number , password) values 
        ('$firname' , '$lasname' , '$emid' , '$contnum' , '$pass')";
    mysqli_query($con, $reg);
    echo" Registration successful";
}
?>














