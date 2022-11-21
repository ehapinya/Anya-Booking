<!DOCTYPE html>
<html>
    <head>
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
	<body class="shortpage">
        <div id="content" class="form">
			
				<h2>Completed Booking<p></p></h2>
               
				<div id="longcard">
                    <br><br><br><br><br><br><br>

                    <?php 
                    $rid = $_POST['submit'];
                    $rname = $_POST['rname'];
                    $rnum = $_POST['rnum'];
                    $max = $_POST['max'];
                    $price = $_POST['price'];
                    $checkin = $_POST['check_in_date'.$rid];
                    $checkout = $_POST['check_out_date'.$rid];

                    require_once('connect.php'); 
                    session_start();
                    $username = $_SESSION['username'];

                    $q = "select ID from customer where Username='$username'";
                    $result=$mysqli->query($q);
                    $row=$result->fetch_array();
                    $cid = $row['ID'];
                    $q = "insert into book values ($cid,$rid,NULL,'$checkin','$checkout')";
                    $result=$mysqli->query($q);
                    $q = "select ID from book where C_ID = $cid and R_ID = $rid and Check_inDate = '$checkin' and Check_outDate = '$checkout'";
                    $result=$mysqli->query($q);
                    
                    while ($row=$result->fetch_array()) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th colspan='3'>";
                        echo "<h4>Booking ID: ".$row['ID']."</h4>";
                        echo "</th>";
                        echo "<tr>";
                        echo "<tr>";
                        echo "<th rowspan='4'>";
                        echo "<img src='../img/kitagawa.jpg' height='300' style='margin-left: 20px;'/>";
                        echo "</th>";
                        echo "<th>";
                        echo "<p class='title'>Room Name: ".$rname."</p>";
                        echo "</th>";
                        echo "<th>";
                        echo "<p class='title'>Room Number: ".$rnum."</p>";
                        echo "</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>";
                        echo "<p>Check in Date :</p>&emsp; ".$checkin;
                        echo "</th>";
                        echo "<th>";
                        echo "<p>Check out Date :</p>&emsp; ".$checkout;
                        echo "</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>";
                        echo "<p>No. of People: ".$max."</p>";
                        echo "</th>";
                        echo "<th>";
                        echo "<p>Total Price: ",$price,"</p>";
                        echo "</th>";
                        echo "</tr>";
                        echo "</table><br><br><br><br><br><br>";
                        
                    }
                    ?>        
                </div>
				<br></br>
				<div class="center">
                    <input type="submit"  value="Home" onclick= "location='customer_home.php'" class="button">			
				</div>
	        </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
