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
	<?php
        $numberofroomincart = 1;
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
			
			<form action="customer_booking.php" method="post">
				<h2>Completed Booking<p></p></h2>
                <div id="longcard">
                    <br><br><br><br><br><br><br>
                    <table>
                        <tr>
                            <th colspan="3">
                                <p class="title" style="margin-left: 10%;">Booking ID: xxxxx</p>
                            </th>
                        </tr>
                        <tr>
                            <th rowspan="4">
                                <img src="../img/kitagawa.jpg" height="300" style="margin-left: 20px;"/>
                            </th>
                            <th>
                                <p class="title">Buiding Name: xxxxxxxx</p>
                            </th>
                            <th>
                                <p class="title">Room Name: xxxxxxxx</p>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p>Check in Date :</p>&emsp; <input type="date" name="check_in_date">
                            </th>
                            <th>
                                <p>Check out Date :</p>&emsp; <input type="date" name="check_in_date">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p>No. of People: x</p>
                            </th>
                            <th>
                                <p>Price: x</p>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <input type="submit"  value="Cancel Booking" class="submit" style="width:200px;">
                            </td>
                        </tr>
                    </table>
                </div>
			</form>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
