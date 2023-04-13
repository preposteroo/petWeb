function showTime() {
      let date = new Date();
      document.getElementById("time").innerHTML=date.toString().substring(0,date.toString().indexOf("G"));
      setTimeout(showTime, 1000);
            }
function required() {
        if (document.getElementById("dogBreed").value=="Does Not Apply" && document.getElementById("catBreed").value=="Does Not Apply"){
        alert("All fields must be filled");
        return false;
    }
    return true;
}     

function validate() {

    if (document.getElementById("dogBreed").value=="Does Not Apply" && document.getElementById("catBreed").value=="Does Not Apply"){
    alert("All fields must be filled");
    return false;
    }
    if (document.getElementById("dogBreed").value!="Does Not Apply" && document.getElementById("catBreed").value!="Does Not Apply"){
    alert("Please only fill out the form for a cat or dog");
    return false;
    }
    
    if (document.getElementById("comment").value=="" || document.getElementById("ownername").value=="" || document.getElementById("owneremail").value=="" ){
        alert("All fields must be filled properly"); 
        return false;
    }
    return true;

}