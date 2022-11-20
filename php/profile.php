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
           if(isset($_POST['submit']));
            $username = $_POST['username'];
            $password = $_POST['passwd'];
            $q= "select * from customer, owner where customer.username='$username' or owner.username='$username'";
                   $result=$mysqli->query($q);
                   if(!$result){
                       echo "Select failed. Error: ".$mysqli->error ;
                       return false;
                   }
        ?>
    </div>
	<body class="shortpage">
		<div id="content" class="form">
            <h1 style="font-size: 150%; margin-left:20px;"><b> Welcome to Anya Booking System</b> <br></h1>
            <h3 class="center"> Welcome <?php 
            $result=$mysqli->query($q);$row=$result->fetch_array(); echo $row['Firstname'], " ",$row['Lastname'], "!!!" ; ?><br> </h3>
            <br></br>
            <div class="center">
                <img src="https://i.pinimg.com/736x/28/20/76/282076c6e9ff50f33c609c0f9a61da8a.jpg" height=240>
            </div>
            <div class="center">
                <h4>
                    <?php 
                    $result=$mysqli->query($q); 
                    $row=$result->fetch_array();
                       $dob=$row['DOB'];
                       echo "Name:",$row['Firstname'], " ",$row['Lastname'],"<br>";
                       //--add "User Group: usergroup"-- 
                       // echo "User Group:", " " ,$_POST["usergroup"],"<br>";
                       //-- add "Email address: Email"-- 
                       echo "Email address:", " " ,$row['Email'],"<br>";
                       //-- Find the gender and output "Gender: gender"-- 
                       echo "Gender:", " ", $row['gender_type'],"<br>";
                       // echo "User group :", " ", $_POST['usergroup'], "<br>";
                       
                       
                       
                       //-- Find the age and output as "Age in years: age"--
                       $byear = date('Y', strtotime($dob));
                       echo "Age in years:", " " ,date("Y") - $byear,"<br>";
                       //-- set default time zone--
                       date_default_timezone_set("Asia/Bangkok");
                       //-- print the login type as " Login time (local): time on date"-- 
                       echo "Account was created on (local):"," ",date("h:i:sa")," on ",date("Y/m/d"), "<br><br>";
                        if ($_POST['usergroup'] == "Customer") {
                            echo("<button onclick=\"location.href='customer_home.php'\" id=submit>&ensp;Home&ensp;</button>");
                            echo("<button onclick=\"location.href='../index.html'\" id=submit>&ensp;Log out&ensp;</button>");
                        }
                        else if ($_POST['usergroup'] == "Hotel Owner") {
                            echo("<button onclick=\"location.href='hotel_register.php'\" id=submit>&ensp;Add hotel&ensp;</button>");
                            echo("<button onclick=\"location.href='../index.html'\" id=submit>&ensp;Log out&ensp;</button>");
                        }
                        else {
                           echo("<button onclick=\"location.href='../index.html'\" id=submit>&ensp;Home&ensp;</button>");
                       }
                    ?>
                </h4> 
            </div>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>  
    </body>
</html>