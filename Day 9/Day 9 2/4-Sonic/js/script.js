

function init() {
	var canvas = document.getElementById("easel");
	var stage = new createjs.Stage(canvas);
	var centerX = canvas.width/2;
	var centerY = canvas.height/2;
	var swirl; 
	var ss = new createjs.SpriteSheet({
		
			
			//images variable takes the location of the sprite sheet
		images: ["images/double-swirl.png"],
		//frame object holds parameters of the animation
		//It will break the image up into 100x100 sections and put the reg in the middle.
		frames: {
			regX: 50,
			regY: 50,
			height: 100,
			width: 100
		}
	});
	
	//After we setup up our sprite sheet, then we call it
	swirl = new createjs.BitmapAnimation(ss);
	
	//Center the ship on screen
	
	swirl.x = centerX;
	swirl.y = centerY;
	swirl.play(); 
	

	//Add Swirl to the stage
	stage.addChild(swirl);	
	createjs.Ticker.setFPS(20);
	
	createjs.Ticker.addListener(function() {
		stage.update();
	});
	

	
	
} //end of init

	