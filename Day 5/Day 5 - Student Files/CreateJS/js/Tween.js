window.onload = function(){
    var canvas = document.getElementById("canvas1");
    var stage = new createjs.Stage(canvas);

    //create a ball
    var ball = new createjs.Shape();

    //set a stroke
    ball.graphics.setStrokeStyle(5, "round", "round");
    ball.graphics.beginStroke("black");
    ball.graphics.beginFill("red");
    ball.graphics.drawCircle(0,0,50);
    ball.graphics.endStroke();
    ball.graphics.endFill();

    //draw a line on the ball so we can see the direction
    ball.graphics.setStrokeStyle(1, "round", "round");
    ball.graphics.beginStroke("black");
    ball.graphics.moveTo(0,0);
    ball.graphics.lineTo(0, 50);
    ball.graphics.endStroke();

    //move ball
    ball.x = 100;
    ball.y = 100;

    //creating the tween

    var tween = createjs.Tween.get(ball, {loop:true})
        .to({x:ball.x, y:canvas.height - 55, rotation: -360}, 1500, createjs.Ease.bounceOut)
        .wait(100)
        .to({x:canvas.width - 55, rotation:360}, 2500, createjs.Ease.bounceOut)
        .to({scaleX:2, scaleY:2, x:canvas.width - 110, y:canvas.height - 110}, 2500, createjs.Ease.bounceOut)
        .wait(1000)
        .to({scaleX:.5, scaleY:.5, x:30, rotation:-360, y:canvas.height-30, alpha:0}, 2500, createjs.Ease.bounceOut)
    
    stage.addChild(ball);

    //ticker
    createjs.Ticker.addEventListener("tick", stage);

}