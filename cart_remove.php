<?php 
include 'C:\xampp\htdocs\Internshala\includes\common.php';
if (!isset($_GET['id'])){
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];

    $query = "DELETE FROM users_products WHERE product_id='$product_id' AND user_id='$user_id'";
    die($query);
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    header("location:cart.php");
}
?>