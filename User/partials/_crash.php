<?php
date_default_timezone_set("Asia/Karachi");
 
$date = new DateTime();
explode($data,",");
echo $date->format('d/m/Y H:i:s');
die();
?>