window.onload = function() {
    //if initializeDefaultPlugins returns false, cannot play sounds in browser
    //Return will stop the init function
    if(!createjs.Sound.initializeDefaultPlugins()) {return;}

    //Store the relative path to our audio assests, variable is best practice.
    //Will allow us to make a single change when moving files, rather than tracking down Individual files.
    var audioPath = "audio/";

    //SoundJS accepts an array of objects that represent each audip instance, called a manifest.

    var manifest = [
        {id:"Music", src:audioPath+"music.mp3|"+audioPath+"music.ogg"},
        {id:"Thunder", src:audioPath+"Thunder1.mp3|"+audioPath+"Thunder1.ogg"},
    ];

    //create an addEventListener to listen for a file load event
    createjs.Sound.addEventListener("fileload", handleload);

    //once its ready, audio can be kicked off using the registerManifest method.
    createjs.Sound.registerManifest(manifest);
}

    //once everything loads run it;
    function handleload(event){
    createjs.Sound.play(event.src);
    }

    function playMusic(){
        createjs.Sound.play("Music");
    }

    function playThunder(){
        createjs.Sound.play("Thunder");
    }