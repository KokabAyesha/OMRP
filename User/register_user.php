<?php

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $address = $_POST["address"];
    $mobileno = $_POST["mobileno"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
      
      
        $sql = "INSERT INTO `users` (`name`, `address`, `mobileno`, `email`, `age`,`gender`, `password`) VALUES ('$name', '$address', '$mobileno', '$email', '$age','$gender' ,'$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
            header("location: user_home.php");
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body style="padding: 0px 20px; height:150vh;  background-image: linear-gradient(red, yellow);">
   
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4" style="max-width: 50%;">
    <h1 class="text-center"><img src="User/img/favicon.png" alt="" height="90PX"> USER REGISTRATION</h1>
     <hr>
     <div class="card shadow p-3">
     <form action="register_user.php" method="post">
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder=" Enter First name" required>
            
        </div>
        <div class="form-group">
            <label for="username">email</label>
            <input type="text" class="form-control" id="email" name="email"  placeholder=" Enter email" required>
            
        </div>
        
        <div class="form-group">
            <label for="username">Age </label>
            <input type="number" class="form-control" id="age" name="age"  placeholder=" Enter Address " required>
            
        </div>
        <div class="form-group">
            <label for="username">Mobile no</label>
            <input type="number" class="form-control" id="mobileno" name="mobileno"  placeholder=" Enter mobileno" required>
            
        </div>
         <div class="form-group">
            <label for="username">Address</label>
            <input type="text" class="form-control" id="address" name="address"  placeholder=" Enter Last name" required>
            
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"  placeholder=" Enter password " required>
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder=" Enter confirm password " required>
            <small id="mobilenoHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
        <div class="form-group ">
            <label for="username" style="font-size: 20px;"><b>Gender</b> </label>
            <hr>
            <div class="d-flex">
            <label for="username"><b>Male </b></label>
            <input type="radio" class="form-control" id="gender" name="gender"  value="Male" required>
            
            <label for="username"><b>FeMale</b> </label>

            <input type="radio" class="form-control" id="gender" name="gender"  value="FeMale" required>
            </div>
            
        </div> 
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
     <div class="row">
         <div class="col-md-12 text-right">
             <a href="login.php">Already Register ? GO TO HOME</a>
         </div>
     </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
