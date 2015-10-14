window.onload = function(){

    var canvas = document.getElementById('canvas');

    //new stage, pass it our canvas
    var stage = new createjs.Stage(canvas);

    //set a frame rate, use a class called a ticker
    createjs.Ticker.setFPS(60);

    //load bitmap
    var bmp = new createjs.Bitmap("images/ship.png");

    //find the center of the canvas
    var centerX = canvas.width/2;
    var centerY = canvas.height/2;

    //set the X&Y to place image in the middle of the canvas
    bmp.x = centerX;
    bmp.y = centerY;

    bmp.regX = 50;
    bmp.regY = 50;

    //scale it up
    //bmp.scaleX = 4;
    //bmp.scaleY = 4;

    //shouldn't display until we add it
    stage.addChild(bmp);

    createjs.Ticker.addEventListener("tick", tick);

    function tick(){
       bmp.rotation += 2;
        bmp.x += 2;
        stage.update();
    }

};