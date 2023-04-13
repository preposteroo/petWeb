<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FurEver Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="pet.js"></script>
    </head>
        <body onload="showTime()">
        
 <div class="header">
            <div id="time"></div>
            <h3>Adopt Now With</h3>
            <table class="head">
                <tr>
                    <td><h2>FurEver Home</h2></td>
               <td> <a href="Home.html"><img src="../Images copy/SpaceBean.png" alt="Space Cat" width=125></a>
                   </td>
                </tr>
            </table>
        </div>
        
        <div class="side_menu">
            <ul>
                <li><a href="Home.html">&#128062; Home</a></li>
                <li><a href="create_account.php">&#128062; Create An Account</a></li>
                <li><a href="Browse.html">&#128062; Browse Pets</a></li>
                <li><a href="Find.php">&#128062; Find a Dog/Cat</a></li>
                <li><a href="Dogcare.html">&#128062; Dog Care</a></li>
                <li><a href="Catcare.html">&#128062; Cat Care</a></li>
                <li><a href="give.php">&#128062; Have a Pet Who Needs A Home?</a></li>
                <li><a href="logout.php">&#128062;  LogOut</a></li>
                <li><a href="contact.html">&#128062; Contact Us!</a></li>
            </ul>
        </div>
        <div class="content">
                   <fieldset class="contact">
            <p>You are now logged out:D</p>
            
        </fieldset> 
        </div>
        <div class="footer">
            <a style="color:white" href="footer.html">Privacy/DisclaimerStatement/Image Credit</a>
        </div>

    </body>
</html>
<?php
    session_destroy();
?>