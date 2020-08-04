<?php 
include 'C:\xampp\htdocs\Internshala\includes\common.php';
if (!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<head>

<title>Login|Lifestyle Store</title>

<link href= "cart.css" rel= "stylesheet" type="text/css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="inner-header">
        <?php include 'C:\xampp\htdocs\Internshala\includes\header.php';?>
    </div>    

   <div class="container">
     <table class="table table-striped">
     <?php
        if(isset($_GET['m1'])){
            $disc=$_GET['m1'];
        }
        $sum = 0;
        $user_id = $_SESSION['user_id'];
        $select_query = "SELECT products.category AS category, products.id, products.name AS Name FROM users_products JOIN products ON users_products.product_id = products.id WHERE users_products.user_id='$user_id' ";
        $result = mysqli_query($con, $select_query)or die(mysqli_error($con));
        if (mysqli_num_rows($result) >= 1) {
            ?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];                                    
                    $id = $row["pid"];
                    echo "<tr><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                if(isset($disc)){
                    $sum = $sum - $sum * (0.2);
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
    </table>
    </div>
    </div>

    <footer>
        <?php include 'C:\xampp\htdocs\Internshala\includes\footer.php';?>
      </footer>
</body>
</html>