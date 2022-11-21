<?php require_once('connect.php'); ?>
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
    <body>
        <div id="content" class="form">
			<!--%%%%% Main block %%%%-->
			<!--Form -->
            <form action="delete_hotel.php" method="post">
                <h2>ROOM LIST</h2>
                <div id="card">
                    <br><br><br><br><br><br><br>
                        <?php
                        session_start();
                        $username = $_SESSION['username'];
                
                        $q ="select room.image,room.ID,room.Name,RoomNumber,MaxAdult,Facility,Price from room join owner on owner.ID=room.O_ID where owner.Username = $username";
                        $result=$mysqli->query($q);
                        if(!$result){
                            echo "Select failed. Error: ".$mysqli->error ;
                            return false;
                        }

                        while ($row=$result->fetch_array()) {
                            if ($i%2 == 0) {echo "<tr>";}
                            echo "<table><tr>
                            <th rowspan='6'>
                                <img src=".$row['image']." height='300' style='margin-left: 20px;'/>
                            </th>
                            <th colspan='2'>
                                <p class='title'>&emsp;Room ID: ".$row['ID']."</p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan='2'>
                                <p>&emsp;Room Name: ".$row['Name']."</p>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p>&emsp;Room Number: ".$row['RoomNumber']."</p>
                            </th>
                            <th>
                                <p>&emsp;Max Adult: ".$row['MaxAdult']."</p>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p>&emsp;Facility: ".$row['Facility']."</p>
                            </th>
                            <th>
                                <p>&emsp;Price per Day: ".$row['Price']."</p>
                            </th>
                        </tr>

                        <tr>
                            <td colspan='3' class='center'>
                                <button type='submit' class=button value=".$row['ID']."  name='delete' style='width:200px;'>DELETE</button>
                            </td>
                        </tr>
                    </table><br><br><br><br><br><br>";
                        
                            
                        }

                        ?>
                </div>
            </form>
	    </div>
        <div id="footer">
            CSS326 Section 1 Group 6
        </div>   
    </body>
</html>
