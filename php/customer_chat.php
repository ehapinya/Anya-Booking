<!DOCTYPE html>
<html>
    <head>
        <script src="https://kit.fontawesome.com/f6d6d0e1e0.js" crossorigin="anonymous"></script>
        <style>
            #chatbutton {
                position: fixed;
                bottom: 80px;
                right: 30px;
                padding: .5em;
                border-radius: 50px;
                color:#efcf60;
                background: #63432f;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 20px;
                text-decoration: none;
                border: none;
            }

            #chatbutton:hover {
                border: none;
                color: #63432f;
                background-color: #fff4c2;
                box-shadow: 0px 0px 1px #efcf60;
            }
        </style>
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
            <h2>Topics</h2>
            <br><br><br><br><br><br><br>
            <div id="longcard" style="margin-left:25%;">
                <table style="width:50%;">
                    <tr><th>&emsp;Topic: </th></tr>
                    <tr><td style="text-align:left">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Detail: </td></tr>
                    <tr><td style="text-align:left">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Status: </td></tr>
                </table>
            </div>
                <button onclick="location.href='customer_newchat.php'" id="chatbutton">Contact Support</button>	
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
