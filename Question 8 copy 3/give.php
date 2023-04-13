<?php
    function getInfo(){
    $username = $_POST['username1'];
    $password = $_POST['password1'];
    $fg = fopen("login.txt", "r");
    while(!feof($fg)){
        $str=fgets($fg);
        if($str==$username . ":" . $password . "\n"){
            return true;
        }
        $str=fgets($fg);
    }
        return false;
    }

    if(isset($_POST['username1'])&&(isset($_POST['password1']))){
        if(getInfo()==1){
             session_start();
             $_SESSION['username1']=$_POST['username1'];
             header("Location: form.php"); 
                exit;  
        }
        else{
            echo '<script>alert("Incorrect Login Information, Try Again!")</script>';
        }
     }

?>
<html lang="en">
    <head>
        <title>FurEver Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script type=text/javascript src="pet.js"></script>
        

        <style>

            h1 {
                text-align: center;
            }
            .info{
                text-align: center;
            }
            .puppy{
                position: absolute;
                z-index: 1;
                left:730px;
                top:0px;
            }
            form{
                position: absolute;
                top:80px;
                left: 180px;
            }
        
        </style>
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
        <div class = "content">
            <form method="post" action="give.php">
            <p>Please Login To Begin, Or, <a href="create_account.php">Create A New Account</a></p>
            <p>Username: <input type="text" class="username1" name="username1"><br></p>
            <p>Password: <input type="password" class="password1" name="password1"><br></p>
            <input type="submit">
            </form>
        </div>
        <div class="footer">
            <a style="color:white" href="footer.html">Privacy/DisclaimerStatement/Image Credit</a>
        </div>
    </body>
</html
<?php
    session_destroy();
    ?>