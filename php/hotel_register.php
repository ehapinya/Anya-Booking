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
                <form action="owner_home.php" method="post">
                    <h2>BUILDING REGISTRATION<br></br></h2>
                    
                    <label>Building name</label>
                    <input type="text" name="firstname">
                    
                    <label>Address</label>
                    <input type="text" name="lastname">

                    
                    <label>Email</label>
                    <input type="text" id="emaill" name="email">
                    
                    
                    <label>Phone Number</label>
                    <input type="text" name="phonenum">

                    <label>Office Number</label>
                    <input type="text" name="offnum">
        
                    <br></br>
                    
                    
                    <div class="center">
                        <input type="submit" value="Register Building" class="submit" style="width: 200px;">			
                    </div>
                </form>
            </div>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
