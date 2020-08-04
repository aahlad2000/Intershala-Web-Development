<?php 
require 'C:\xampp\htdocs\Internshala\includes\common.php';
?>
<?php 
if (isset($_SESSION['email_id'])){
  header('location:products.php');
}
?>

<!DOCTYPE html>
<head>

<title>Login|Lifestyle Store</title>

<link href= "login.css" rel= "stylesheet" type="text/css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
    <?php include 'C:\xampp\htdocs\Internshala\includes\header.php';?>
    </div>    
    <div class="panel-primary">
        <div class="panel-heading"><h3>LOGIN</h3></div>
        <div class="panel-body">
            <p class="text-warning">
                Login to make a purchase.
            </p>
            <div class="form-group">
                  <form role="form" action= "login_submit.php" method="POST">     
                     <input type="text" name="email_id" placeholder="email_id" class="form-control"><br><br>
                     <input type="password" name="password" placeholder="password" class="form-control"><br><br>
                     <button class="btn btn-primary" >Login</button>
                     
                   </form>  
                 </div>
              </div>
            </div>
        </div>
        <div class="panel-footer">Don't have an account? <a href="signup.php">Register here</a></div>
      </div>
      

   </div>
<footer>
<?php include 'C:\xampp\htdocs\Internshala\includes\footer.php';?>
</footer>

</body>