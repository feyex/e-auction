//let get todays date here
var today = new Date();
var DD = today.getDate();
var MM = today.getMonth()+1; //January is 0!
var YYYY = today.getFullYear();
//let get the Difference in Sec btw the two dates
var _DateFromDBProgEndDate = '<?php echo $time_left; ?>';
var ProgEndTime = new Date(_DateFromDBProgEndDate);
var TodayTime = new Date();

var differenceTravel = ProgEndTime.getTime()- TodayTime.getTime() ;
var seconds = Math.floor((differenceTravel) / (1000));
////////////////////////////////
var SecDiffFromToday = seconds;
var seconds = SecDiffFromToday;
function timer() {
    var days        = Math.floor(seconds/24/60/60);
    var hoursLeft   = Math.floor((seconds) - (days*86400));
    var hours       = Math.floor(hoursLeft/3600);
    var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
    var minutes     = Math.floor(minutesLeft/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    //document.getElementById('countdown').innerHTML = days + ":" + hours + ":" + minutes + ":" + remainingSeconds;
    document.getElementById('dday').innerHTML = days;
    document.getElementById('dhour').innerHTML =hours;
    document.getElementById('dmin').innerHTML =minutes;
    document.getElementById('dsecond').innerHTML =remainingSeconds;



    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Completed";
    } else {
        seconds--;
    }
}
var countdownTimer = setInterval('timer()', 1000);
