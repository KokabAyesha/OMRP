<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["save_oprator"]))
{

    $name=$_POST['name'];
    $address=$_POST['link'];

   	// Get image name
       $image = $_FILES['img']['name'];
       
       // image file directory
       $target = "upload/".rand(5088090592616,2).basename($image);

       $sql = "INSERT INTO oprator (`name`,`link`,`img`) values('$name','$address','$target')";
       // execute query
       mysqli_query($conn, $sql);
 
       if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
           $msg = "Image uploaded successfully";
           
           echo "<script type='text/javascript'>alert('Oprator save successfully'); window.location.href='Add_oprator.php';</script>";
           
           
       }else{
           $msg = "Failed to upload image";
           echo $msg;  die();
       }
     
    
   
    
    $conn->close();
}
// edit oprator
if(isset($_POST["Edit_oprator"]))
{
$id_ot=$_POST['id'];


    $name=$_POST['name'];
    $address=$_POST['link'];

   	// Get image name
       $image = $_FILES['img']['name'];
       
       // image file directory
       $target = "upload/".rand(5088090592616,2).basename($image);

       $sql = "UPDATE oprator set name='$name',link='$address',img='$target' where id='$id_ot'";
       // execute query
       mysqli_query($conn, $sql);
 
       if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
           $msg = "Image uploaded successfully";
             echo "<script type='text/javascript'>alert('Oprator Edit successfully'); window.location.href='oprator_setup.php';</script>";
         
           
           
       }else{
           $msg = "Failed to upload image";
           echo $msg;  die();
       }
     
    
   
    
    $conn->close();
}
//save plan

if(isset($_POST["save_plan"]))
{

    $optr_name=$_POST['optr_name'];
    $services=$_POST['services'];
    $amount=$_POST['amount'];
    $desc=$_POST['desc'];
if( empty($optr_name) || empty($services)){
  echo `<script type="text/javascript"> alert('plan not save')</script>`;
  header("location:Add_plan.php");
}else{
    $sql = "INSERT INTO plans (`optr_name`,`services`,`amount`,`desc`) values('$optr_name','$services','$amount','$desc')";
       // execute query
       mysqli_query($conn, $sql);
    
  echo "<script type='text/javascript'>alert('Plan Save successfully'); window.location.href='Add_plan.php';</script>";
      
           
}     
      
}

// edit oprator
if(isset($_POST["save_offer"]))
{

    $optr_name=$_POST['optr_name'];
    $desc=$_POST['desc'];

   	// Get image name
       $image = $_FILES['img']['name'];
       
       // image file directory
       $target = "upload/".rand(5088090592616,2).basename($image);

       $sql = "INSERT INTO offer (`optr_name`,`desc`,`img`) values('$optr_name','$desc','$target')";
       // execute query
       mysqli_query($conn, $sql);
 
       if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
           $msg = "Image uploaded successfully";
           
          echo "<script type='text/javascript'>alert('Offer Save successfully'); window.location.href='Add_offer.php';</script>";

             
           
       }else{
           $msg = "Failed to upload image";
           echo $msg;  die();
       }
    
   
    
    $conn->close();
}
?>