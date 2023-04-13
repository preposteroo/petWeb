<?php
    if(isset( $_POST["submit"])&& ! empty( $_POST["submit"])){
    $array= array($_POST['kind'],$_POST['dogBreed'],$_POST['catBreed'],$_POST['age'],$_POST['gender'],$_POST['kids'],$_POST['cats'],$_POST['dogs']);
    $arg;
    $records;
    $fp = fopen("availpetinfo.txt", "r");
    while (!feof($fp)) {
        $str=fgets($fp);
        for($i=0;$i<sizeof($array);$i++){
            if($array[$i]=="Doesn't Matter"){
            }
            else{
                $arg = str_contains($str,$array[$i]); 
            }
            if($arg==0){
          
                break;
            }

        }
        if(($arg==1)){
            $arr=explode(":", $str);
            $records.=nl2br("\n Submitted by: " . $arr[1] . "\n Type: " . $arr[2] . "\n Dog Breed: ". $arr[3]. "\n Cat Breed: " .$arr[4]. "\n Age: ". $arr[5]. "\n Gender: ". $arr[6]. "\n Gets Along with Kids: ". $arr[7]. "\n Gets Along with Cats: ". $arr[8]. "\n Gets along with Dogs: ". $arr[9]. "\n Comment: ". $arr[10]. "\n Owner Full Name: ". $arr[11]. "\n Owner Email: ". $arr[12]);
        }
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FurEver Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="pet.js"></script>
        <style>
            
            h1 {
                position: absolute;
                top:40px;
                left: 310px;
                
            }
            .info{
                text-align: center;
            }
            .form{
                position: absolute;
                top:138px;
                left:150px;
            }
            .kitty{
                position: absolute;
                top:1px;
                left:150px;
                
            }
            .records{
               position: absolute;
                top:500px;
                left:150px;  
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
        <div class="content" id="content">
            <img class="kitty" src="https://www.aylmervet.com/wp-content/uploads/sites/234/2022/03/9-copy.png" alt="Kitty" width="150">
            <h1>Find Your FurEver Buddy!</h1> 
            
            <form id ="findForm" class="form" onsubmit="return required()" method="post" action="Find.php">
            <fieldset class="survey">
                <legend class="info">What Kind Of Buddy Are You Looking For?</legend><br>
                
                I'm Looking For A:
                <select id="kind" name="kind">
                <option>Cat</option>
                <option>Dog</option></select><br><br>
                
                
               What Kind of Breed? :
                Dogs  <select id = "dogBreed" name="dogBreed">
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
                <select id= "catBreed" name="catBreed">
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
                
                How Old Should Your Fur Baby Be? <select id= "age" name="age">
                    <option>Doesn't Matter</option>
                    <option>Less Than One Year(Baby)</option>
                    <option>1 to 3 Years Old</option>
                    <option>4 to 8 Years Old</option>
                    <option>8 Years Old (Senior)</option>
                </select> <br><br>
                
                Preferred Gender:
                <select name="gender">
                <option>Female</option>
                <option>Male</option>
                <option>Doesn't Matter</option></select><br><br>
                
                Your Fur Baby Should Get Along With (Select All That Apply): <br>
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
            </fieldset><br><br>
            
             <input type = "submit"
           value = "Submit" name="submit">
    
            <input type = "reset"
           value = "Reset" >
    
        </form>
            <div class="records">
                <?php
                echo nl2br("Records: "."\n");
                echo $records;
            ?>
            </div>
        </div>
        <div class="footer">
            <a style="color:white" href="footer.html">Privacy/DisclaimerStatement/Image Credit</a>
        </div>
    </body>
    

</html>