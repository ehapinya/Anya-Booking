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
            <h1 style="font-size: 150%; margin-left:20px;"><b> Welcome to Anya Booking System</b> </h1>
            <h3 class="center"> Welcome <?php echo $_POST["firstname"], " ",$_POST["lastname"], "!!!" ; ?></h3>
            <p></p>
            <div class="center">
                <img src="https://img-9gag-fun.9cache.com/photo/aqGYN3Y_460s.jpg" height=240>
            </div>
            <div class="center">
                <h4>
                    <?php 
                        echo "Name:",$_POST["firstname"], " ",$_POST["lastname"],"<br>";
                        //--add "User Group: usergroup"-- 
                        // echo "User Group:", " " ,$_POST["usergroup"],"<br>";
                        //-- add "Email address: Email"-- 
                        echo "Email address:", " " ,$_POST["email"],"<br>";
                        //-- Find the gender and output "Gender: gender"-- 
                        echo "Gender:", " ", $_POST["gender"],"<br>";
                        echo "User group :", " ", $_POST['usergroup'], "<br>";
                        
                        
                        
                        //-- Find the age and output as "Age in years: age"--
                        $byear = date('Y', strtotime($dob));
                        echo "Age in years:", " " ,date("Y") - $byear,"<br>";
                        //-- set default time zone--
                        date_default_timezone_set("Asia/Bangkok");
                        //-- print the login type as " Login time (local): time on date"-- 
                        echo "Account was created on (local):"," ",date("h:i:sa")," on ",date("Y/m/d"), "<br><br>";

                        echo("<button onclick=\"location.href='hotel_register.php'\" class=submit>&ensp;Add hotel&ensp;</button>");
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