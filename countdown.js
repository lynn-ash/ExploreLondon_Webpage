//Choosing desired date
var setDate = new Date("July 10, 2025 15:37:27")

var x = setInterval(function(){

    //Gathering current date
    var dateNow = new Date().getTime();

    //Finding distance between current and desired date
    var distance = setDate - dateNow;

    //Calculations to find the days, hours, minutes, and seconds
    var day =  Math.floor(distance / (1000 * 60 * 60 * 24));
    var hour = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minute = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var second = Math.floor((distance % (1000 * 60)) / 1000);

    //Print results
    document.getElementById("tourCountdown").innerHTML = day + "d " + hour + "h " + minute + "m " + second + "s ";


    //Show message once countdown is over
    if(distance < 0){
        clearInterval(x);
        document.getElementById("tourCountdown").innerHTML = "TOURS HAVE STARTED"
    }
}, 1000)