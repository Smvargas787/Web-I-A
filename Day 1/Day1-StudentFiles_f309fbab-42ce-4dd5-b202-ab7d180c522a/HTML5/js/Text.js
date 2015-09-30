window.onload = function() {
	var theCanvas = document.getElementById('Canvas1');
	if (theCanvas && theCanvas.getContext) {
	var ctx = theCanvas.getContext("2d");
	if (ctx) {
						
				var theString = "Drawing Text on Canvas";

		//draw simple text
		ctx.fillText(theString, 20, 20);

		//draw text with font info
		ctx.font = "25pt Georgia";
		ctx.fillText(theString, 20, 60);

		//add some color
		ctx.fillStyle = "blue";
		ctx.fillText(theString, 20, 100);
						
						
		}
	}
}