// Set the date we're counting down to
var countDownDate = new Date("June 12, 2024 15:37:25").getTime();
var countdownElement = document.getElementById("countdown");
var winner = document.getElementById("winner");
var cards = document.getElementById("cards");
var loaderContaner = document.querySelector(".loader-contaner");


// Update the count countdown every 1 second
var countdownInterval = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count countdown date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="countdown"
    countdownElement.innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    // If the countdown is finished, clear the interval
    if (distance < 0) {
        clearInterval(countdownInterval);
        countdownElement.innerHTML = "Countdown Finished!";
        winner.style.display = 'block';
    }
}, 1000);


