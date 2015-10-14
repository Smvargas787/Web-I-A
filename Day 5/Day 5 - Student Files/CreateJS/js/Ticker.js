window.onload = function(){

    var canvas = document.getElementById("canvas1");
    var stage = new createjs.Stage("canvas1");
    var rect1 = new createjs.Shape();

    rect1.graphics.beginFill("red").drawRect(0,0,100,100);

    //change the registration point
    rect1.regX = 50;
    rect1.regY = 50;

    //move it to (100,100)
    rect1.x = 100;
    rect1.y = 100;

    //add it to the stage
    stage.addChild(rect1);

    //draw it to the canvas & have the stage update
    //stage.Update();

    createjs.Ticker.setFPS(30);

    createjs.Ticker.addEventListener("tick", tick);

    function tick(){
        rect1.rotation +=8;
        rect1.alpha -=.1;
        stage.update();
    }
}