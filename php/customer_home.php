<?php
require_once('connect.php');
$q= "select ID, Name, RoomNumber, Price, image from room";
$result=$mysqli->query($q);
if(!$result){
    echo "Select failed. Error: ".$mysqli->error ;
    return false;
}  
?>
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
	<body>
		<div id="content">
            <img src="../img/akihabara.jpg" alt="Image" style="align-items: center; width: 100%;">
            <h2>
                <br>HOT DEAL !!!</br>
                <br><br>
            </h2>
            <div id="card">
                <table>
                    <?php
                        $i = 0;
                        while ($row=$result->fetch_array()) {
                            if ($i%2 == 0) {echo "<tr>";}
                            echo "<th>";
                            echo "<img src='".$row['image']."' alt='Image' class=img>";
                            echo "<h4 class='title'><strong>".$row['Name']."</strong></h4>";
                            echo "<p class='text'>Price per Day: ".$row['Price']."</p>";
                            $id1 = $row['ID'];
                            echo "<button onclick=\"location.href='cart.php?id=".$id1."'\" class=button >Book Now</button>";
                            echo "</th>";
                            if ($i%2 == 0) {echo "<br></br>";} else {echo "</tr>";}
                            $i = $i+1;
                        }
                    ?>
				</table>
		    </div> 
	    </div>
    </body>
    <div id="footer">
        CSS326 Section 1 Group 6
    </div>   
</html>
