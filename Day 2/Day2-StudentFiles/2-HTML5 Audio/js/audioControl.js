//Create Variable
var audio;

window.onload = function() {
		audio = document.getElementById("audio");
}

function clicked(){
    //currentTime
    //Skips ahead 2 seconds of the song.
    audio.currentTime += 2;
}