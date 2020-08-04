<?php 
include 'C:\xampp\htdocs\Internshala\includes\common.php';
if (!isset($_SESSION['email'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<head>

<title>Settings|Lifestyle Store</title>

<link href= "login.css" rel= "stylesheet" type="text/css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="inner-header">
        <?php include 'C:\xampp\htdocs\Internshala\includes\header.php';?>
        </div>
    </div>  

    
                <form action="settings_script.php" method="POST">
                  <div class="form-group">
                    <label for="oldPassword">Old Password</label>
                    <input type="password" class="form-control" name="oldPassword" required>                    
                  </div>
                  <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input type="password" class="form-control" name="newPassword" required>
                  </div>
                  <div class="form-group">
                    <label for="newPasswordRe">Re-type New Password</label>
                    <input type="password" class="form-control" name="newPasswordRe" required>                    
                  </div>
                  <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
                  <input type="submit" class="btn btn-setting btn-block" value="Confirm">
                </form>
            

    <footer>
    <?php include 'C:\xampp\htdocs\Internshala\includes\footer.php';?>
        </div>
    </footer>
</body>   

