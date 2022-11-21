<?php
session_start();

$rname = $_POST['rname'];
$size = $_POST['size'];
$rnum = $_POST['roomnum'];
$price = $_POST['price'];
$rnum = $_POST['roomnum'];
$max = $_POST['max'];
$fac = $_POST['fac'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$username = $_SESSION['username'];

require_once('connect.php');

$q="select * from owner where Username=$username;";

$result=$mysqli->query($q);

if(!$result){
    echo "Select failed. Error: ".$mysqli->error ;
    return false;
}  

$row=$result->fetch_array();

$r="INSERT INTO room (Name,Size,Price,RoomNumber,MaxAdult,Facility,CheckinTime,CheckoutTime,O_ID) VALUES ('$rname','$size',$price,'$rnum',$max,'$fac','$checkin','$checkout',$row[0]);";

$result->free();

$result=$mysqli->query($r);

if(!$result){
    echo "INSERT failed. Error: ".$mysqli->error ;
}

$mysqli->close();
//redirect
header("location: owner_home.php");

?>