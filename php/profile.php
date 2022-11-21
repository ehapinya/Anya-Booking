<?php require_once('connect.php'); ?>
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
                    <button onclick="location.href='profile.php'" id="icon"><i class="fa-solid fa-circle-user" style="font-size: 38px; color: #291f1d;"></i></button>
                </th>
            </tr>
        </table>
    </header>
    <div class="navbar">
        <?php    
            session_start();
            
            if ($_POST['username'] == "ADMIN" && $_POST['passwd'] == "0123") {
                header("location: admin_profile.php");
                die();
            }

            if (isset($_POST["username"])) {
                $username = $_POST["username"];
                $_SESSION["username"] = $username;
            }
            else {
                $username = $_SESSION["username"];
            }
            if (isset($_POST["usergroup"])) {
                $usergroup = $_POST["usergroup"];
                $_SESSION["usergroup"] = $usergroup;
                if ($usergroup == "Hotel Owner") {
                    header("location: owner_profile.php?username='$username'");
                    die();
                }
            }
            else {
                $usergroup = $_SESSION["usergroup"];
            }
            $q= "select * from customer where Username='$username'";
            $result=$mysqli->query($q);
            if(!$result){
                echo "Select failed. Error: ".$mysqli->error ;
                return false;
            }   
            $row=$result->fetch_array();
        ?>
        <a href='../php/customer_home.php'>&ensp;Home&ensp;</a>
    </div>
	<body class="shortpage">
		<div id="content" class="form">
            <h1 style="font-size: 150%; margin-left:20px;"><b> Welcome to Anya Booking System</b> <br></h1>
            <h3 class="center"> Welcome <?php  echo $row['Firstname'], " ",$row['Lastname'], "!!!" ; ?><br> </h3>
            <br></br>
            <div class="center">
                <img src="https://i.pinimg.com/736x/28/20/76/282076c6e9ff50f33c609c0f9a61da8a.jpg" height=240>
            </div>
            <div class="center">
                <h4>
                    <?php 
                    
                       $dob=$row['DOB'];
                       echo "Name:",$row['Firstname'], " ",$row['Lastname'],"<br>";
                       //--add "User Group: usergroup"-- 
                       echo "User Group:", " " ,$usergroup,"<br>";
                       //-- add "Email address: Email"-- 
                       echo "Username :", " ", $username, "<br>";
                       echo "Email address:", " " ,$row['Email'],"<br>";
                       //-- Find the gender and output "Gender: gender"-- 
                       echo "Gender:", " ", $row['gender_type'],"<br>";
                       // echo "User group :", " ", $_POST['usergroup'], "<br>";
                       
                       
                       
                       //-- Find the age and output as "Age in years: age"--
                       $byear = date('Y', strtotime($dob));
                       echo "Age in years:", " " ,date("Y") - $byear,"<br><br><br>";
                    
                        if ($usergroup == "Customer") {
                            echo("<button onclick=\"location.href='customer_home.php'\" class=submit>&ensp;Home&ensp;</button>");
                            echo("<button onclick=\"location.href='../index.html'\" class=submit>&ensp;Log out&ensp;</button>");
                        }
                        else if ($usergroup == "Hotel Owner") {
                            echo("<button onclick=\"location.href='hotel_register.php'\" class=submit>&ensp;Add hotel&ensp;</button>");
                            echo("<button onclick=\"location.href='../index.html'\" class=submit>&ensp;Log out&ensp;</button>");
                        }
                        else {
                           echo("<button onclick=\"location.href='../index.html'\" class=submit>&ensp;Home&ensp;</button>");
                       }
                    ?>
                </h4> 
            </div>
	    </div>
        <!-- <div id="footer">
            CSS326 Section 1 Group 6
        </div>   -->
    </body>
</html>