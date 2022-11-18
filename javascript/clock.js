//clock script by Josh Winter
function currentTime() {
    let date = new Date(); //initialize date
    let hour = date.getHours(); //initialize hour
    let minute = date.getMinutes(); //initialize minute
    let second = date.getSeconds(); //initialize second
    let period = "AM"; //declare period as AM
    if(hour === 0){ //set midnight
        hour = 12; //change hour value
    }
    if(hour > 12){  //if hours is greater than 12
        hour = hour - 12; //reset hour
        period = "PM"; //change period to PM
    }
    hour = (hour < 10) ? "0" + hour : hour; //set final hour value
    minute = (minute < 10) ? "0" + minute : minute; //set final minute vale
    second = (second < 10) ? "0" + second : second; // set final second value
    let time = hour + ":" + minute + ":" + second + " " + period; //set time value
    document.getElementById("clock").innerText = time; //write time
    let t = setTimeout(function(){ currentTime(); }, 1000); //output
}
currentTime(); //allows function to be called in HTML