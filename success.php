<?php 
include 'C:\xampp\htdocs\Internshala\includes\common.php';
if (!isset($_SESSION['email']){
    header('location:index.php');
}
)?>
<!DOCTYPE html>
<head>

<title>Login|Lifestyle Store</title>

<link href= "login.css" rel= "stylesheet" type="text/css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php
  $item_id = $_GET['item_id'];
  $user_id = $_SESSION['id'];
  $query = "UPDATE usrs_items SET status = 'Confirmed' WHERE user_id = '$user_id' AND items_id IN ('$item_id') AND status ='Added to cart'";
  $update_name_result = mysqli_query($con,$query) or die(mysqli_error($con)."query not executed");
  ?>
    <h3><strong>Your order is confirmed. Thank you for shopping
        with us. <a href="products.php" ​>Click here​ </a>to purchase any other item.</strong></h3>
</body>
</html>
