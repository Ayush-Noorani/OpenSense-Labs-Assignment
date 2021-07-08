function cityCheck(that){
    if(that.value == "other"){
        document.getElementById("cityname").style.display="flex";
        document.getElementById("relocate").style.display="flex";
    } else {
        document.getElementById("cityname").style.display="none";
        document.getElementById("relocate").style.display="none";
    }
}