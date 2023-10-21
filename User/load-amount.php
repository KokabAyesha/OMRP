<?php
$conn = new mysqli("localhost","root","","omr");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

         $se=$_POST['value'];
        //  echo $se ;die();
        $sql = "SELECT * FROM plans where services='$se'";
        $result = $conn->query($sql);
        $str4="";
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
           
         $amount=$row['amount'];
        
        
        $str4.= "<option value=".$amount.">".$amount."</option>";
    
          }
        }
        
  
echo $str4;

?>