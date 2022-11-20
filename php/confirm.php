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
	<body>
        <div id="content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->
			
				<h2>Completed Booking<p></p></h2>
				
				<h4>Booking ID: xxxxx</h4>
               
				<div class="row">
                    <div class="column" style="background-color:none;">
                        <img src="../img/kitagawa.jpg" width="250" height="200"/>
                      
                    </div>
                    <div class="column" style="background-color:none;">
                     
                      <p> &emsp;&emsp; Buiding Name: xxxxxxxx</p>
                      <p>&emsp;&emsp;Check in Date :  </p>
                      &emsp; <input type="date" name="check_in_date">
                      <p>&emsp;&emsp; No. of People: x</p>
                    </div>
                    <div class="column" style="background-color:none;">
                        <p> &emsp; Room Name: xxxxxxxx</p>
                        <p>&emsp;Check out Date :  </p>
                         <input type="date" name="check_out_date">
                        <p>&emsp; Price: x</p>
                    </div>
                    
                  </div>
				

				<br></br>
				<div class="center">
                    <input type="submit"  value="Home" onclick= "location='customer_home.php'">			
					<input type="submit"  value="Cancel Booking" onclick= "location='customer_booking.php'">	
				</div>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
