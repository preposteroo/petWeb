<?php
 function validatePassword(){  
       if(preg_match('/\d/',$_POST["password"])!=1){
         return false;  
       }
       elseif(preg_match('/[A-Za-z]/',$_POST["password"])!=1){
            return false;
        }
       elseif((preg_match('/[a-zA-Z0-9]/',$_POST["password"])!=1)&&(strlen($_POST["password"])!=4)){
            return false;  
        }
        else{
            return true;
        }
    }

  function validateUsername(){
       if(preg_match('/[a-zA-Z0-9]*/',$_POST["username"])!=1){
         return false;  
       }
    else{
        return true;
        }
  } 
    if(isset($_POST["username"])&&(isset($_POST["password"]))){ 
      if((validatePassword()==false) || (validateUsername()==false)){
        echo "Please enter a valid password and username";
      }
       else{
            $username = $_POST["username"];
            $password = $_POST["password"];
            $text = ($username . ":" . $password . "\n");
            $fp = fopen("login.txt", "a");
            fwrite($fp, $text);
            /*fclose($fp);*/
        }
    }
?>
<DOCTYPE! html>
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
                   <fieldset class="create">
            <legend class="account">Time to Create Your New Account!</legend>
                    <form action="create_account.php" method="post">
                    <p>Username: <input type="text" name="username"></p>
                    <p>Password: <input type="password" name="password"></p>
                    <p><input type="submit"></p>
                    </form>  
                    
            
        </fieldset> 
        </div>
        <div class="footer">
            <a style="color:white" href="footer.html">Privacy/DisclaimerStatement/Image Credit</a>
        </div>

    </body>
</html>
</DOCTYPE!>