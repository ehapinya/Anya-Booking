<?php session_start(); require_once('connect.php'); ?>
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
                <?php   
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $dob = $_POST['DOB'];
                    $phone_no = $_POST['phonenum'];
                    $email = $_POST['email'];
                    $citizen_id = $_POST['citizenID'];
                    $username = $_POST['username'];
                    $password = $_POST['passwd'];
                    $usergroup = $_POST['usergroup'];
                    $gender = $_POST['gender'];

                    if ($usergroup == "Customer") {
                        echo  '<button onclick="location.href=\'profile.php\'" id="icon"><i class="fa-solid fa-circle-user" style="font-size: 38px; color: #291f1d;"></i></button>' ;
                    }
                    else if ($usergroup == "Hotel Owner") {
                        echo  '<button onclick="location.href=\'owner_profile.php\'" id="icon"><i class="fa-solid fa-circle-user" style="font-size: 38px; color: #291f1d;"></i></button>' ;
                    }
                    else {
                        echo  '<a class="button" href="../html/login.html">Log in</a>&ensp;<a class="button" href="../html/register.html">Sign up</a>' ;
                    }
                ?>
                </th>
            </tr>
        </table>
    </header>
    <div class="navbar">
        <?php     

            if ($usergroup == "Customer") {
                echo "<a href='../php/customer_home.php'>&ensp;Home&ensp;</a>" ;
            }
            else if ($usergroup == "Hotel Owner") {
                echo "<a href='../php/hotel_register.php'>&ensp;Add hotel&ensp;</a>";
            }
            else {
                echo("<a href='../index.html'>&ensp;Home&ensp;</a>");
            }
        ?>
    </div>
	<body class="shortpage">
		<div id="content" class="form">
            <h1 style="font-size: 150%; margin-left:20px;"><b> Welcome to Anya Booking System</b> <br></h1>
            <h3 class="center"> Welcome <?php echo $firstname, " ",$lastname,"!!!"; ?><br> </h3>
            <br></br>
            <div class="center">
                <img src="https://i.pinimg.com/736x/28/20/76/282076c6e9ff50f33c609c0f9a61da8a.jpg" height=240>
            </div>
            <div class="center">
                <h4>
                    <?php 
                        $_SESSION["username"] = $username;
                        $_SESSION["usergroup"] = $usergroup;
                        if ($usergroup == "Customer") {
                            $q="INSERT INTO customer (ID, CitizenID, Username, Firstname, Lastname, Password,
                                Disable, Email, phonenumber, DOB, gender_type) 
                                VALUES (null,'$citizen_id','$username','$firstname','$lastname','$password', null,'$email','$phone_no','$dob','$gender')";
                                $result=$mysqli->query($q);
                            if(!$result){
                                echo "Can not create an account.";
                            }
                            else {
                                
                        
                                echo "Name:",$firstname, " ",$lastname,"<br>";
                                echo "Username :", " ", $username, "<br>";
                                echo "Email address:", " " ,$email,"<br>";
                                //-- Find the gender and output "Gender: gender"-- 
                                echo "Gender:", " ", $gender,"<br>";
                                echo "User group :", " ", $usergroup, "<br>";
                                
                                //-- Find the age and output as "Age in years: age"--
                                $byear = date('Y', strtotime($dob));
                                echo "Age in years:", " " ,date("Y") - $byear,"<br>";
                                //-- set default time zone--
                                date_default_timezone_set("Asia/Bangkok");
                                //-- print the login type as " Login time (local): time on date"-- 
                                echo "Account was created on (local):"," ",date("h:i:sa")," on ",date("Y/m/d"), "<br><br>";
                                echo("<button onclick=\"location.href='customer_home.php'\" class=submit>&ensp;Home&ensp;</button>");
                                echo("<button onclick=\"location.href='../index.html'\" class=submit>&ensp;Log out&ensp;</button>");
                                
                            }
                            
                        }
                        else if ($usergroup == "Hotel Owner") {
                
                            $q="INSERT INTO `owner` (`ID`, `CitizenID`, `Username`, `Email`, `Firstname`, `Lastname`,
                            `Password`, `Ownertype`, `Disable`,DOB, gender_type)  
                            VALUES (NULL, '$citizen_id', '$username', '$email', '$firstname', '$lastname', '$password', NULL, NULL, '$dob', '$gender')";
                            $result=$mysqli->query($q);
                            if(!$result){
                                echo "Can not create an account.";
                            } 
                            else {
                        
                                echo "Name:",$firstname, " ",$lastname,"<br>";
                                echo "Username :", " ", $username, "<br>";
                                echo "Email address:", " " ,$email,"<br>";
                                //-- Find the gender and output "Gender: gender"-- 
                                echo "Gender:", " ", $gender,"<br>";
                                echo "User group :", " ", $usergroup, "<br>";
                                
                                //-- Find the age and output as "Age in years: age"--
                                $byear = date('Y', strtotime($dob));
                                echo "Age in years:", " " ,date("Y") - $byear,"<br>";
                                //-- set default time zone--
                                date_default_timezone_set("Asia/Bangkok");
                                //-- print the login type as " Login time (local): time on date"-- 
                                echo "Account was created on (local):"," ",date("h:i:sa")," on ",date("Y/m/d"), "<br><br>";
                                echo("<button onclick=\"location.href='hotel_register.php'\" class=submit>&ensp;Add hotel&ensp;</button>");
                                echo("<button onclick=\"location.href='../index.html'\" class=submit>&ensp;Log out&ensp;</button>");
                                
                            } 
                        }
                        else {
                            echo "Please Login or Register<br><br>";
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