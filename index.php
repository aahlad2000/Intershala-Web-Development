<?php 
 require 'C:\xampp\htdocs\Internshala\includes\common.php';

?>
<?php 
if (isset($_SESSION['email'])){
  header('location: products.php'); 
}
 ?>
<!DOCTYPE html>
<head>
<!---- The page has a title Lifestyle Store-->
<title>Lifestyle Store</title>
<!---- External css file index.css placed in the folder css is linked-->
<link href= "index.css" rel= "stylesheet" type="text/css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="header">
    <?php include 'C:\xampp\htdocs\Internshala\includes\header.php';?>
    </div>
    <div class="content">
      <div class="banner-image">
        <img src="intro-bg_1.jpg" alt="" class="thumbnail">
            
            
         <div class="banner-content">
            <h1>We sell Lifestyle</h1>
            <p>Flat 40% OFF on premium brands</p>
              <button type="button" class="btn btn-danger btn-lg active"><a href="products.php" class="buttton">Shop Now</a></button>
            <div class="inner-banner-image">
                
                  
             </div>   
                    
         </div>
      </div>
    </div>

   
    

    <div class="items">
        <a href="products.php">
        <img src="camera.jpg" alt="" class="thumbnail">
        <div class="caption">
        <h2>Cameras</h2>
        <p>Choose among the best available in the world.</p>
        </div>
        </a>
    </div>

    <div class="items">
        <a href="products.php" >
        <img src="shirt.jpg" alt="" class="thumbnail">
        <div class="caption">
        <h2>Shirts</h2>
        <p>Choose among the best available in the world.</p>
        </div>
        </a>
    </div>
    <div class="items">
        <a href="products.php" >
        <img src="watch.jpg" alt="" class="thumbnail">
        <div class="caption">
        <h2>Watches</h2>
        <p>Choose among the best available in the world.</p>
        </div>
        </a>
    </div>
    <footer>
    <?php include 'C:\xampp\htdocs\Internshala\includes\footer.php';?>
    </footer>

</body>
</html>