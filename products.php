<?php
include 'C:\xampp\htdocs\Internshala\includes\common.php';
?>
<!DOCTYPE html>
<head>

<title>Products|Lifestyle Store</title>

<link href= "products.css" rel= "stylesheet" type="text/css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>




<body>
    <div class="header">
    <?php include 'C:\xampp\htdocs\Internshala\includes\header.php';
     ?>
     

    </div>  
 </div>  
   <div class="container">
       <div class="jumbatron">
           <h1>Welcome to our Lifestyle Store!</h1>
           <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
            have all in one place.</p>
       </div>

   </div>

   <div class="row">
    <div class="column" style="float:left; width: 33%">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="1.jpg" class="thumbnail">
                <caption>Nikon EOS</caption>
                <h3>Price:Rs200000</h3>
                <?php 
                 
                 include 'C:\xampp\htdocs\Internshala\includes\check_if_added.php';
                
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>    

       
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="2.jpg" class="thumbnail">
                <caption>Cannon EOS</caption>
                <h3>Price:Rs289000</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" >Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>    


        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="3.jpg" class="thumbnail">
                <caption>FujiFilm EOS</caption>
                <h3>Price:Rs267000</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>    
     

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="4.jpg" class="thumbnail">
                <caption>Sony EOS</caption>
                <h3>Price:Rs250000</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>
    </div>


    <div class="column" style="float:left; width: 33%">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="6.jpg" class="thumbnail">
                <caption>Allen Solly</caption>
                <h3>Price:Rs2500</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="8.jpg" class="thumbnail">
                <caption>Wrangler</caption>
                <h3>Price:Rs2000</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="13.jpg" class="thumbnail">
                <caption>Flying Machine</caption>
                <h3>Price:Rs2800</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="14.jpg" class="thumbnail">
                <caption>Wills</caption>
                <h3>Price:Rs3000</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>
    </div>
    <div class="column" style="float:left; width: 33%">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="7.jpg" class="thumbnail">
                <caption>Timex</caption>
                <h3>Price:Rs7800</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="9.jpg" class="thumbnail">
                <caption>Fossil</caption>
                <h3>Price:Rs8000</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="10.jpg" class="thumbnail">
                <caption>Casio</caption>
                <h3>Price:Rs7000</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="11.jpg" class="thumbnail">
                <caption>Titan</caption>
                <h3>Price:Rs6000</h3>
                <?php 
                if (!isset($_SESSION['email_id'])) 
                { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } else {
                             if (check_if_added_to_cart(1))
                              {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                         }
                         else { 
                              ?> 
                                 <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                         }
                        }
                        ?>
            </div>
        </div>
    </div>




   </div>


   <footer>
   <?php include 'C:\xampp\htdocs\Internshala\includes\footer.php';?>
  </footer>
  
</body>