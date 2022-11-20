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
			<!--%%%%% Main block %%%%-->
			<!--Form -->
			<div class=wrapinput>
                <form action="customer_chat.php" method="post">
                    <h2>Contact Support<br></br></h2>
                    
                    <div class="BDnGender">
                        <label>Topic</label>
                        <select name="Topic">
                                <option value="Disable">Why I got disable</option>
                                <option value="Other">Other</option>
                        </select>
                    </div>

                    <p></p>

                    <label>Details</label>
                    <textarea name="Reason" style="width:50%;height:30%;">Type your problems here</textarea>

                    <br></br>
                    
                    
                    <div class="center">
                        <input type="submit" value="Create Topic" class="submit" style="width: 150px;">			
                    </div>
                </form>
            </div>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
