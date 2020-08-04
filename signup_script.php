<?php 
include 'C:\xampp\htdocs\Internshala\includes\common.php';
$first_name = mysqli_real_escape_string($con,$_POST['first_name']);
$last_name = mysqli_real_escape_string($con,$_POST['last_name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);

if(strlen($password)<1){
    header('location:index.php');
}

$select_query = "SELECT id FROM users where email_id='$email'";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));

if(mysqli_num_rows($select_query_result)>0)
{
   echo "Email ID Already exists"; 
}
else
{
$insert_query="INSERT into users(first_name,last_name,email_id,password,phone) values ('".$first_name."','".$last_name."','$email','$password','$phone')";
$insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
mysqli_insert_id($con);
echo "user successfully inserted";
header('location:products.php');

;

$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);

}
?>

