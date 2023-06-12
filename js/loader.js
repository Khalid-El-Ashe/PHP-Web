// i need to make style timer 
var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height;
var diff;
var sim;
var loaderContaner = document.querySelector(".loader-contaner");
var winner = document.getElementById("winner");

function progressSim() {
    diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2);
    ctx.clearRect(0, 0, cw, ch);
    ctx.lineWidth = 17;
    ctx.fillStyle = '#4285f4';
    ctx.strokeStyle = "#4285f4";
    ctx.textAlign = "center";
    ctx.font = "28px monospace";
    ctx.fillText(al + '%', cw * .52, ch * .5 + 5, cw + 12);
    ctx.beginPath();
    ctx.arc(100, 100, 75, start, diff / 10 + start, false);
    ctx.stroke();
    if (al >= 100) {
        clearTimeout(sim);
        // Add scripting here that will run when progress completes
        // when complete i need to show the winner 
        // i need to use function to show the myModal winner 
        myModal.show();
        loaderContaner.style.display = 'none';
    }
    al++;
}

// i need to make 
var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
    Keyboard: false
});

// in here i need to show the winner 
winner.addEventListener('click', function () {
    // i need to show the loader 
    loaderContaner.style.display = 'block';
    sim = setInterval(progressSim, 50);

    // // i need to use function to show the winner 
    // setTimeout(function () {
    //     myModal.show();
    // }, 3500);
});