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
			<!--%%%%% Main block %%%%-->
			<!--Form -->
            <div class=wrapinput>
                <form action="update_hotel.php" method="post">
                    <h2>Add Room <br></br></h2>

                    <label>Room name</label>
                    <input type="text" name="rname">

                    <label>size</label>
                    <input type="text" name="size">
                    
                    <div>
                        <label>Price per day</label>
                        <input type="number" name="price">
                    </div> 
                    
                    <div>
                        <label>Room Number</label>
                        <input type="text" name="roomnum">
                    </div> 

                    <div>
                        <label>Max Adult</label>
                        <input type="number" name="max">
                    </div> 

                    <label>Facility</label>
                    <input type="text" name="fac">
                    <div>
                        <label>Start Check-in From</label>
                        <select name="checkin">
                            <option value="8AM">8AM</option>
                            <option value="9AM">9AM</option>
                            <option value="10AM">10AM</option>
                            <option value="11AM">11AM</option>
                            <option value="12PM">12PM</option>
                            <option value="1PM">1PM</option>
                            <option value="2PM">2PM</option>
                            <option value="3PM">3PM</option>
                            <option value="4PM">4PM</option>
                        </select>
                    </div> 
                    <div>
                        <label>Latest Check-out Time</label>
                        <select name="checkout">
                            <option value="10AM">10AM</option>
                            <option value="11AM">11AM</option>
                            <option value="12PM">12PM</option>
                            <option value="1PM">1PM</option>
                            <option value="2PM">2PM</option>
                        </select>
                    </div> 
                    <br>
                    <div class="center">
                        <input type="submit" value="Register Room" class="submit" style="width: 200px;">			
                    </div>
                
                </form>
            </div>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
