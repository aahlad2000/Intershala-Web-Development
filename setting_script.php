<?php 
include 'C:\xampp\htdocs\Internshala\includes\common.php';
if (!isset($_SESSION['email'])){
    header('location:index.php');
}

$con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
$email=$_SESSION['email'];
$password=md5(mysqli_real_escape_string($con,$_POST['Password']);
$newpass=md5(mysqli_real_escape_string($con,$_POST['newpass']);
$newpass2=md5(mysqli_real_escape_string($con,$_POST['newpass2']);

if($newpass != $newpass2){
    header('location:settings.php?error=The two passwords don\'t match');
}

$select_query="SELECT password FROM users WHERE email='$email' and password='$password'";
$select_query_result=mysqli_query($con,$seelect_query) or die(mysqli_error($con));
$total_row_fetched=mysqli_num_rows($select_query_result);

if(mysqli_num_rows($select_query_result)>0){
    $row=mysqli_fetch_array($select_query_result);
    $r=$row['0'];
    if($password==$r){
        $con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
        $select_query="UPDATE 'users' SET 'password' = '$newpass' WHERE 'users'.'email'='$email'";
        $select_query_result=mysqi_query($con,$select_query) or die(mysqli_error($con));
        header('location:settings.php?error=Password Updated');
    }
    else{
        header('location:settings.php?error=Wrong Old Password');
    }
}
)
)?>
