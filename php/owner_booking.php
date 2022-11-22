<?php 
session_start(); 
require_once('connect.php');
$username = $_SESSION["username"];
$q= "select b.ID , r.image , r.Name , b.Check_inDate , b.Check_outDate , r.MaxAdult , r.Price from book b join room r on b.R_ID = r.ID join owner o on r.O_ID = o.ID where o.Username='$username'";
$result=$mysqli->query($q);
if(!$result){
    echo "Select failed. Error: ".$mysqli->error ;
    return false;
}  
$number= $result -> num_rows;
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
	<?php
        if ($number < 2) {
            echo "<body class=shortpage>";
        }
        else {
            echo "<body>";
        }
    ?>
        <div id="content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->
            <form action="owner_chat.php" method="post">
                <h2>BOOKING LIST</h2>
                <div id="card">
                    <br><br><br><br><br><br><br>
                    <?php
                        while ($row=$result->fetch_array()) {
                            echo "<table>";
                            echo "<tr>";
                            echo "<th colspan='3'>";
                            echo "<p class='title' style='margin-left: 10%;'>Booking ID: ".$row['ID']."</p>";
                            echo "</th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<th rowspan='4'>";
                            echo "<img src=".$row['image']." height='300' style='margin-left: 20px;'/>";
                            echo "</th>";
                            echo "<th colspan='2'>";
                            echo "<p class='title'>Room Name: ".$row['Name']."</p>";
                            echo "</th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<th>";
                            echo "<p>Check in Date :</p>&emsp; ".$row['Check_inDate'];
                            echo "</th>";
                            echo "<th>";
                            echo "<p>Check out Date :</p>&emsp; ".$row['Check_outDate'];
                            echo "</th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<th>";
                            echo "<p>No. of People: ".$row['MaxAdult']."</p>";
                            echo "</th>";
                            echo "<th>";
                            echo "<p>Price per Day: ",$row['Price'],"</p>";
                            echo "</th>";
                            echo "</tr>";
                            echo "</table><br><br><br><br><br><br>";
                        }
                        ?>
                </div>
            </form>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
