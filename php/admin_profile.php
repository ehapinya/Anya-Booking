<!DOCTYPE html>
<html>
    <head>
        <script src="https://kit.fontawesome.com/f6d6d0e1e0.js" crossorigin="anonymous"></script>
    </head>
    <title>Anya Booking</title>
    <link rel="stylesheet" href="../css/admin_style.css">
    <header id="header">
        <table>
            <tr>
                <th>
                    <h1>ANYA admin</h1>
                </th>
                <th class="right">
                    <button onclick="location.href='admin_chat.php'" id="icon"><i class="fa-solid fa-comment-dots"></i></button>
                    <button onclick="location.href='admin_profile.php'" id="icon"><i class="fa-solid fa-circle-user"></i></button>
                </th>
            </tr>
        </table>
    </header>
    <div class="navbar">
        <a href="admin_home.php">&ensp;Home&ensp;</a>
        <a href="admin_currentcase.php">&ensp;Current Case&ensp;</a>
        <a href="admin_closedcase.php">&ensp;Closed Case&ensp;</a>
        <a href="admin_bookinglist.php">&ensp;Booking&ensp;</a>
        <a href="admin_ownerlist.php">&ensp;Owner&ensp;</a>
        <a href="admin_customerlist.php">&ensp;Customer&ensp;</a>
    </div>
	<body class="shortpage">
		<div id="content" class="form">
            <h1 style="font-size: 150%; margin-left:20px;"><b> Welcome to Anya Booking System</b> <br></h1>
            <h3 class="center"> Welcome Admin 1 !!!<br> </h3>
            <br></br>
            <div class="center">
                <img src="https://w0.peakpx.com/wallpaper/981/935/HD-wallpaper-anime-spy-x-family-loid-forger.jpg" height=240>
            </div>
            <div class="center">
                <h4>
                    <?php 
                        echo "Name: Admin 1 <br>";
                        //--add "User Group: usergroup"-- 
                        // echo "User Group:", " " ,$_POST["usergroup"],"<br>";
                        //-- add "Email address: Email"-- 
                        echo "Email address:", " admin1@anyabooking.com <br>";
                        echo "Gender:", " Any<br>";                        
                    
                        //-- Find the age and output as "Age in years: age"--
                        echo "Age in years:", " " ,date("Y") - 2002,"<br><br>";
                        
                        echo("<button onclick=\"location.href='../index.html'\" class=submit>&ensp;Home&ensp;</button>");
                        echo("<button onclick=\"location.href='../index.html'\" class=submit>&ensp;Log out&ensp;</button>");
                    ?>
                </h4> 
            </div>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>  
    </body>
</html>
