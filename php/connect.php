<?php
$mysqli = new mysqli('localhost','root','','hotelbooking_draft');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
 ?>
