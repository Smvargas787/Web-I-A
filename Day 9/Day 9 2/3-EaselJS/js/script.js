var ship; 

function init() {
	var canvas = document.getElementById("easel");
	var stage = new createjs.Stage(canvas);
	var centerX = canvas.width/2;
	var centerY = canvas.height/2;
	var ss = new createjs.SpriteSheet({
		//Animations is an attribute that holds all of the Sprite sheet data
		
		animations: {
			//Written sort of like JSON data
			//Sequence names - fly and then the number of frames called
			fly: [0, 6],
			explode:[8,12, "fly"]
		},
			
			//images variable takes the location of the sprite sheet
		images: ["images/Ship-Blink.png"],
		//frame object holds parameters of the animation
		//It will break the image up into 100x100 sections and put the reg in the middle.
		frames: {
			regX: 55,
			regY: 40,
			height: 80,
			width: 110
		}
	});
	
	//After we setup up our sprite sheet, then we call it
	ship = new createjs.BitmapAnimation(ss);
	
	//Center the ship on screen
	
	ship.x = centerX;
	ship.y = centerY;
	//ship.play(); //Plays the whole animation
	ship.gotoAndPlay("fly");

	//Add ship to the stage
	stage.addChild(ship);	
	createjs.Ticker.setFPS(15);
	
	createjs.Ticker.addListener(function() {
		stage.update();
	});
	

	
	
} //end of init

	function blowUp(){
		ship.gotoAndPlay("explode");
	
	}