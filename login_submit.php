  
<?php 
include 'C:\xampp\htdocs\Internshala\includes\common.php';
 ?>    
<?php
$email = mysqli_escape_string($con,$_POST['email_id']);
$password = mysqli_escape_string($con,$_POST['password']);
$password = md5(md5($password));
$con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
$select_query = "SELECT * FROM users WHERE email_id='".$email."' and password='".$password."'";
$select_query_result = mysqli_query($con,$select_query);

if(mysqli_num_rows($select_query_result)==0)
{
    echo  "SORRY! Not Registered";
}
else{
$row = mysqli_fetch_array($select_query_result);
$_SESSION['id'] = $row['id'];
$_SESSION['email_id'] = $row['email_id'];
}
if (isset($_SESSION['email_id'])){
    header('location:products.php');
  }
?>
