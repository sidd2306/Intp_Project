<?php 
session_start();


$passd="";
  $con=mysqli_connect("localhost","root",$passd,"userregistration");
  mysqli_select_db($con, 'userregistration');

$emaild = $_SESSION['emaid'];
/*echo $emaild;
if($emaild)
{
    echo "Ok";
}
else
{
    echo "fail";
}
$_SESSION['fname']=$_GET['fname'];
$_SESSION['lname']=$_GET['lname'];
$_SESSION['contactnum']=$_GET['contactnum'];*/
$firname = $_SESSION['fname'];
/*echo $fname;
if(fname)
{
    echo "Ok";
}
else
{
    echo "fail";
}*/
$lasname = $_SESSION['lname'];
$contnum = $_SESSION['contactnum'];
$gender = isset($_GET['gender']) ? $_GET['gender'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
$birthday = isset($_GET['bday']) ? $_GET['bday'] : '';
$area= isset($_GET['area']) ? $_GET['area'] : '';
$occupation = isset($_GET['occupation']) ? $_GET['occupation'] : '';
$occloc = isset($_GET['occloc']) ? $_GET['occloc'] : '';
$address = isset($_GET['address']) ? $_GET['address'] : '';
$pincode = isset($_GET['pincode']) ? $_GET['pincode'] : '';
$vegquant = isset($_GET['vquantity']) ? $_GET['vquantity'] : '';
$nonvegquant = isset($_GET['nvquantity']) ? $_GET['nvquantity'] : '';
$start = isset($_GET['startdate']) ? $_GET['startdate'] : '';
$noofmonths = isset($_GET['months']) ? $_GET['months'] : '';

/*if($num==1){
    echo" This email has been already registered";
}else{*/
    $finalinsert= " insert into userdelivery values 
        ('$emaild','$firname' , '$lasname', $contnum, '$gender' ,$age, '$birthday' , '$area' , '$occupation' , '$occloc' , '$address', $pincode , $vegquant , $nonvegquant, '$start' , $noofmonths)";
    mysqli_query($con, $finalinsert);
    echo"<br>Thank you for placing your order";
?>