function searching(){
    if(document.getElementById("LogginBox").style.display == "block")
        document.getElementById("LogginBox").style.display = "none"
    else{
        document.getElementById("LogginBox").style.display = "block";
        document.getElementById("recherche").focus();
    }
}