//Nav bar
function navBarDrop(){
    var x = document.getElementById("myNav");

    if(x.className === "nav1"){
        x.className += " responsive";
    }
    else{
        x.className = "nav1";
    }
}