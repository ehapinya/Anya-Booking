<?php
session_start();

$rid = $_POST['delete'];

require_once('connect.php');

$q="delete from room where ID=$rid;";
$result=$mysqli->query($q);
if(!$result){
    echo "delete failed. Error: ".$mysqli->error ;
    return false;
}  
else {
//redirect
header("location: owner_home.php");
}
?>