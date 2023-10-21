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
if(isset($_POST["submit_feedback"]))
{

    $name=$_POST['name'];
    $feedback=$_POST['feedback'];
    $sql = "INSERT INTO feedback (`name`,`feedback`) values('$name','$feedback')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo "<script type='text/javascript'>alert('Feedback save successfully'); window.location.href='feedback.php';</script>";
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
if(isset($_POST["proceed_pay"]))
{
  session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    
    exit;
}

    $session_email=$_SESSION['email'];
    
    $oprator=$_POST['oprator'];
    $m_no=$_POST['m_no'];
    $vas=$_POST['vas'];
    $amount=$_POST['amount'];
    $p_amount=$_POST['p_amount'];
    $cardname=$_POST['card_name'];
    $cardno=$_POST['card_no'];
    $exp_date=$_POST['exp_date'];
    $cvv_no=$_POST['cvv_no'];
 
    $sql = "INSERT INTO recharge (`oprator`,`m_no`,`vas`,`amount`,`p_amount`,`card_name`,`card_no`,`exp_date`,`cvv_no`,`session_email`) 
    values('$oprator','$m_no','$vas','$amount','$p_amount','$cardname','$cardno','$exp_date','$cvv_no','$session_email')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo "<script type='text/javascript'>alert('Recharge successfully'); window.location.href='user_home.php';</script>";
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}

?>