<?php 
include 'C:\xampp\htdocs\Internshala\includes\common.php';
 if (isset($_SESSION['email']))
  {  
    header('location: C:\xampp\htdocs\Internshala\products.php');
   } 
    ?>
<!DOCTYPE html>
<head>

<title>Sign Up|Lifestyle Store</title>

<link href= "signup.css" rel= "stylesheet" type="text/css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="header">
  <?php include 'C:\xampp\htdocs\Internshala\includes\header.php';?>
</div>    

<form action= "signup_script.php" method="post"> 
  <h3>Sign Up</h3>
  <div class="form-group">
    <input type="text" name="first_name" placeholder="first_name" class="form-control" required="true"><br> 
    <input type="text" name="last_name" placeholder="last_name" class="form-control" required="true"><br>       
    <input type="text" name="email" placeholder="email" class="form-control" required="true"><br>
    <input type="password" name="password" placeholder="password" class="form-control" required="true"><br>
    <input type="text" name="phone" placeholder="phone" class="form-control" required="true"><br>

    <button class="btn btn-primary" >Submit</button>
</div>
</form>

<footer>
<?php include 'C:\xampp\htdocs\Internshala\includes\footer.php';?>
</footer>
</body>