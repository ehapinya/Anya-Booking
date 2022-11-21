<?php require_once('connect.php'); 
session_start();
$username = $_SESSION['username'];

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    $q = "select * from cart where ID = $id and username = '$username';";
    $result=$mysqli->query($q);
    $num=$result->num_rows;
    if ($num < 1) {
        $q = "insert into cart values ($id,'$username')";
        $result=$mysqli->query($q);
    }
}

$q= "select * from cart join room on cart.ID = room.ID where cart.username = '".$username."'";
$result=$mysqli->query($q);
$numberofroomincart = $result->num_rows;
if(!$result){
    echo "Select failed. Error: ".$mysqli->error ;
    return false;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <script>document.getElementById("date").value</script>
        <script src="https://kit.fontawesome.com/f6d6d0e1e0.js" crossorigin="anonymous"></script>
    </head>
    <title>Anya Booking</title>
    <link rel="stylesheet" href="../css/style.css">
    <header id="header">
        <table>
            <tr>
                <th>
                    <h1>ANYA booking</h1>
                </th>
                <th class="right">
                    <button onclick="location.href='customer_chat.php'" id="icon"><i class="fa-solid fa-comment-dots" style="font-size: 38px; color: cart.php291f1d;"></i></button>
                    <button onclick="location.href='cart.php'" id="icon"><i class="fa-solid fa-cart-shopping" style="font-size: 38px; color: cart.php291f1d;"></i></button>
                    <button onclick="location.href='profile.php'" id="icon"><i class="fa-solid fa-circle-user" style="font-size: 38px; color: cart.php291f1d;"></i></button>
                </th>
            </tr>
        </table>
    </header>
    <div class="navbar">
        <a href="customer_home.php">&ensp;Home&ensp;</a>
        <a href="customer_booking.php">&ensp;Booking&ensp;</a>
    </div>
    <?php
        if ($numberofroomincart < 2) {
            echo "<body class=shortpage>";
        }
        else {
            echo "<body>";
        }
    ?>
        <div id="content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->
			
			<form action="confirm.php" method="post">
                
				<h2>Saved hotel list<br></br></h2>
			    <div id="longcard">
                    <br><br><br><br><br><br><br>

                    <?php 
                    
                    while ($row=$result->fetch_array()) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th rowspan='4'>";
                        echo "<img src='../img/kitagawa.jpg' height='300' style='margin-left: 20px;'/>";
                        echo "</th>";
                        echo "<th>";
                        echo "<p class='title'>Room Name: ".$row['Name']."</p>";
                        echo "</th>";
                        echo "<th>";
                        echo "<p class='title'>Room Number: ".$row['RoomNumber']."</p>";
                        echo "</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>";
                        echo "<p>Check in Date :</p>&emsp; <input type='date' name='check_in_date".$row['ID']."' placeholder='yyyy-mm-dd'>";
                        echo "</th>";
                        echo "<th>";
                        echo "<p>Check out Date :</p>&emsp; <input type='date' name='check_out_date".$row['ID']."' placeholder='yyyy-mm-dd'>";
                        echo "</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>";
                        echo "<p>No. of People: ".$row['MaxAdult']."</p>";
                        echo "</th>";
                        echo "<th>";
                        echo "<p>Price per Day: ".$row['Price']."</p>";
                        echo "</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td colspan='2' class='center'>";
                        echo "<button type='submit' class=button value=".$row['ID']."  name='submit' style='width:200px;'>Confirm Booking</button>";
                        echo "</td>";
                        echo "</tr>";
                        echo "</table><br><br><br><br><br><br>";
                        
                        echo "<input type='hidden' name='rname' value=".$row['Name'].">";
                        echo "<input type='hidden' name='rnum' value=".$row['RoomNumber'].">";
                        echo "<input type='hidden' name='max' value=".$row['MaxAdult'].">";
                        echo "<input type='hidden' name='price' value=".$row['Price'].">";
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
