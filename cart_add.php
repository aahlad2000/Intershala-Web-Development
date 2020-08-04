<?php 
include 'C:\xampp\htdocs\Internshala\includes\common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$users_products="INSERT INTO users_products(user_id, product_id, status) VALUES ('$user_id', '$product_id', 'Added to cart')";
$usesr_products_submit=mysqli_query($con,$users_prodcuts) or die(mysqli_error($con));
header('location:products.php');
}
?>


