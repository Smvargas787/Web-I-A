var vid;

window.onload = function() {
    //link the variable
    vid = document.getElementById("vid");
}

function clicked(){
        //HTML 5 Property
        //currentTime - in seconds

    //Makes the button skip 2 seconds of the video.
    vid.currentTime += 2;
}

function pauseToggle(){

    if(vid.paused) {


        vid.play();

    }else{

        vid.pause();
    }
}