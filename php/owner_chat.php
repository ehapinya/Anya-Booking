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
            <h2>Topics</h2>
            <br><br><br><br><br><br><br>
            <div id="card" style="margin-left:25%;">
                <table style="width:50%;">
                    <tr><th>&emsp;Topic: </th></tr>
                    <tr><td style="text-align:left">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Detail: </td></tr>
                    <tr><td style="text-align:left">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Status: </td></tr>
                </table>
            </div>
                <button onclick="location.href='owner_newchat.php'" id="chat">Contact Support</button>	
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
