<?php
        session_start();
        if(isset( $_POST["submit"])&& ! empty( $_POST["submit"])){
        $_SESSION["kind"]=$_POST["kind"];
        $_SESSION['dogBreed']=$_POST['dogBreed'];
        $_SESSION['catBreed']=$_POST['catBreed'];
        $_SESSION['age']=$_POST['age'];
        $_SESSION['gender']=$_POST['gender'];
        $_SESSION['kids']=$_POST['kids'];
        $_SESSION['cats']=$_POST['cats'];
        $_SESSION['dogs']=$_POST['dogs'];
        $_SESSION['comment']=$_POST['comment'];
        $_SESSION['ownername']=$_POST['ownername'];
        $_SESSION['owneremail']=$_POST['owneremail'];
        $fp = fopen("availpetinfo.txt", "a+");
        $linecount;
        if(file_get_contents("availpetinfo.txt")==""){
          $linecount = 0;  
        }
        else{
        $linecount = -1;
            while(!feof($fp)){
              $line = fgets($fp);
              $linecount++;
            }
        }
        fwrite($fp,$linecount . ":" . $_SESSION['username1'] . ":" . $_POST["kind"]. ":" . $_POST['dogBreed'] . ":" . $_POST['catBreed'] . ":" . $_POST['age'] . ":" . $_POST['gender'] . ":" . $_POST['kids']  . ":" . $_POST['cats'] . ":" . $_POST['dogs']. ":" . $_POST['comment'] . ":" . $_POST['ownername'] . ":" . $_POST['owneremail'] . "\n");
        fclose($fp); 
    }
?>
<DOCTYPE! html>
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

        <div class="content">
             <h1>Have A Pet Who Needs a Home?</h1> 
            <img class="puppy" src="https://petpat.mx/assets/images/question-dog.png" width=150 alt="Puppy">
            
            <form class = "give" id="giveAway" onsubmit=" return validate();" method="post" action="form.php">
            <fieldset class="survey">
                <legend class="info">What is This Fur Baby Like?</legend><br>
                
                I Have A:
                <select id="kind" name="kind">
                <option>Cat</option>
                <option>Dog</option></select><br><br>
                
                What Kind of Breed is the Fur Baby? :
                Dogs  <select id="dogBreed" name="dogBreed">
                    <option>Does Not Apply</option>
                    <option>Doesn't Matter</option>
                    <option>Domestic ShortHair</option>
                    <option>Domestic LongHair</option>
                    <option>German Shepherd</option>
                    <option>Border Collie</option>
                    <option>Australian Shephard</option>
                    <option>Dalmatian</option>
                    <option>Labrador</option>
                    <option>Golden Retriever</option>
                </select>
                
                Cats 
                <select id="catBreed" name="catBreed">
                    <option>Does Not Apply</option>
                    <option>Doesn't Matter</option>
                    <option>Domestic ShortHair</option>
                    <option>Domestic LongHair</option>
                    <option>Siamese</option>
                    <option>British ShortHair</option>
                    <option>Persian</option>
                    <option>Maine Coon</option>
                    <option>Sphynx</option>
                    <option>Bengal</option>
                </select><br><br>
                
                How Old is the Fur Baby? <select name="age">
                    <option>Less Than One Year(Baby)</option>
                    <option>1 to 3 Years Old</option>
                    <option>4 to 8 Years Old</option>
                    <option>8 Years Old (Senior)</option>
                </select> <br><br>
                
                Fur Baby's Gender?:
                <select name="gender">
                <option>Female</option>
                <option>Male</option></select><br><br>
                
                Your Fur Baby Gets Along With (Select All That Apply): <br>
                Kids:
                <select name="kids">
                    <option>Yes</option>
                    <option>No</option>
                </select> 
                Cats
                <select name="cats">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                Dogs
                <select name="dogs">
                    <option>Yes</option>
                    <option>No</option>
                </select><br><br>
                
                Tell Us About This Fur Baby! What should people know about them? : <br>
                <input type="text" id="comment" name="comment" size=50>
                <br><br>
                
                What is the current owner's name? (First and Last Name)
                <input type="text" id="ownername" name="ownername"><br><br>
                
                What is the current owner's email? 
                <input type="email" id="owneremail" name="owneremail">
                
                
            </fieldset><br>
            
             <input type = "submit"
           value = "Submit" name="submit">
    
            <input type = "reset"
           value = "Reset" >
    
        </form>
            
        </div>
        <div class="footer">
            <a style="color:white" href="footer.html">Privacy/DisclaimerStatement/Image Credit</a>
        </div>
    </body>
</html>
</DOCTYPE!>