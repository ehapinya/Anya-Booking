<?php 
require_once('connect.php'); 
session_start();
if (isset($_GET["username"])) {
    $username = $_GET["username"];
    $_SESSION["username"] = $username;  
}
else {
    $username = $_SESSION["username"];
}
$q= "select * from owner where Username=$username;";
$result=$mysqli->query($q);
if(!$result){
    echo "Select failed. Error: ".$mysqli->error ;
    return false;
}   
if ($result->num_rows == 0) {
    header("location: profile_register.php");
    die();
}
$row=$result->fetch_array();
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://kit.fontawesome.com/f6d6d0e1e0.js" crossorigin="anonymous"></script>
    </head>
    <title>Anya Booking</title>
    <link rel="stylesheet" href="../css/owner_style.css">
    <header id="header">
        <table>
            <tr>
                <th>
                    <h1>ANYA booking</h1>
                </th>
                <th class="right">
                    <button onclick="location.href='owner_chat.php'" id="icon"><i class="fa-solid fa-comment-dots"></i></button>
                    <button onclick="location.href='owner_profile.php'" id="icon"><i class="fa-solid fa-circle-user"></i></button>
                </th>
            </tr>
        </table>
    </header>
    <div class="navbar">
        <a href="owner_home.php">&ensp;Hotel Info&ensp;</a>
        <a href="owner_booking.php">&ensp;Booking&ensp;</a>
    </div>
	<body class="shortpage">
		<div id="content" class="form">
            <h1 style="font-size: 150%; margin-left:20px;"><b> Welcome to Anya Booking System</b> </h1>
            <h3 class="center"> Welcome <?php echo $row["Firstname"], " ",$row["Lastname"], "!!!" ; ?></h3>
            <p></p>
            <div class="center">
                <img src="https://img-9gag-fun.9cache.com/photo/aqGYN3Y_460s.jpg" height=240>
            </div>
            <div class="center">
                <h4>
                    <?php 
                        
                        echo "Name:",$row["Firstname"], " ",$row["Lastname"],"<br>";
                        echo 'Username : '.$row['Username'].' <br>';
                        //--add "User Group: usergroup"-- 
                        echo "User group :", " Hotel Owner", "<br>";
                        //-- add "Email address: Email"-- 
                        echo "Email address:", " " ,$row["Email"],"<br>";
                        //-- Find the gender and output "Gender: gender"-- 
                        echo "Gender:", " ", $row["gender_type"],"<br>";
                        
                        
                        
                        
                        //-- Find the age and output as "Age in years: age"--
                        $byear = date('Y', strtotime($row['DOB']));
                        echo "Age in years:", " " ,date("Y") - $byear,"<br><br>";

                        echo("<button onclick=\"location.href='hotel_register.php'\" class=submit>&ensp;Add room&ensp;</button>");
                        echo("<button onclick=\"location.href='../index.html'\" class=submit>&ensp;Log out&ensp;</button>");
                    ?>
                </h4> 
            </div>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>  
    </body>
</html>