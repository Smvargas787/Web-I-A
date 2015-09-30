/*
     Name: Selena Vargas
     Date: 9/29/15
     Class & Section:  WIA-####
     Comments: "HTML5 Canvas Drawing"
 */


/*******************************************
HTML5 Shape Drawing Activity
    1.  Setup the canvas and 2d context
    2.  Draw out each shape in the sections below


********************************************/

/*******************************************
FILE SETUP

// Setup up 7 different Canvases in index.html one for each problem.
//Link Modernizr.js
// Link the main.js file
// Setup the call to that canvas and get it's 2d context
//Use Modernizr to verify that your browser supports canvas, include a fallback message

/*******************************************
PART 1

Draw a rectangle starting at point (0 ,0)
That has a width of 50 px and a height of 100px
Set the color of the rectangle to a shade of blue.
Set the stroke color to black and the dimension of the stroke are the same as the rectangle.

Reminder - set the style first then draw.
********************************************/

//Draw Rectangle here
window.onload= function() {
    var theCanvas = document.getElementById('Canvas1');
    if (theCanvas) {
        var ctx = theCanvas.getContext('2d');
        if (ctx) {

            //Part 1
            ctx.strokeStyle = "black";
            ctx.fillStyle = "blue";
            ctx.fillRect(0, 0, 50, 100);
            ctx.lineWidth = 5;
            ctx.strokeRect(0, 0, 50, 100);

        }
    }


    /*******************************************
     PART 2

     Draw a circle starting at point (50 ,50)
     That has a radius of 20 px
     Set the color of the circle to a shade of red and set the alpha to .5
     Set the stroke color to black and use a radius of 30px for this circle.

     Reminder - set the style first then draw.
     Use the arc method
     ********************************************/


//Draw Circle here

    var theCanvas2 = document.getElementById('Canvas2');
    if (theCanvas2) {
        var ctx2 = theCanvas2.getContext("2d");
        if (ctx2) {

            ctx2.strokeStyle = "blue";
            ctx2.fillStyle = "red";
            ctx2.lineWidth = 5;


            //stroke and fill a circle
            var degrees = 360;
            var radians = (Math.PI / 180) * degrees;
            ctx2.beginPath();
            ctx2.arc(50, 50, 20, 0, radians);
            ctx2.fillStyle = "rgba(255, 0, 0, .5)";
            ctx2.strokeStyle = "black";
            ctx2.fill();
            ctx2.stroke();
        }


        /*******************************************
         PART 3

         Practice using Path drawing.
         Create a 5-point star shaped pattern using the lineTo method.
         Begin this shape at (100, 100)

         Height and width and color are up to you.

         ********************************************/


//Draw Star here

        var theCanvas3 = document.getElementById('Canvas3');
        if (theCanvas3) {
            var ctx3 = theCanvas3.getContext("2d");
            if (ctx3) {

                ctx3.beginPath(100, 100);
                ctx3.moveTo(45, 75);
                ctx3.lineTo(75, 105);
                ctx3.lineTo(85.5, 115.5);
                ctx3.lineTo(135.2, 162);
                ctx3.lineTo(50, 225.5);
                ctx3.lineTo(160.5, 236.7);
                ctx3.lineTo(190, 297.5);
                ctx3.lineTo(220.5, 245.5);
                ctx3.lineTo(345, 265.5);
                ctx3.lineTo(255, 205);
                ctx3.lineTo(490, 200);
                ctx3.closePath();
                ctx3.fill();
                ctx3.stroke();

            }
        }


        /*******************************************
         PART 4

         Practice drawing with Bezier curves.
         Try drawing the top to an umbrella.
         This should have one large arc (a half circle) on the top and scalloped edges on the bottom.

         Position, height, width and color are your choice.
         Do not overlap any other object.

         ********************************************/

//Draw Umbrella top here
        var theCanvas4 = document.getElementById('Canvas4');
        if (theCanvas4) {
            var ctx4 = theCanvas4.getContext("2d");
            if (ctx4) {

                ctx4.strokeStyle = "green";
                ctx4.lineWidth = 5;

                ctx4.beginPath();
                ctx4.moveTo(50, 200);
                //bezierCurveTo(cx, cy, cx2, cy2, end1, end1)
                ctx4.bezierCurveTo(50, 100, 200, 100, 200, 150);
                ctx4.stroke();
            }
        }

        /*******************************************
         PART 5

         Practice using text.
         Draw text into your canvas.  It can said whatever you would like in any color.

         ********************************************/

//Draw text here
        var theCanvas5 = document.getElementById('Canvas5');
        if (theCanvas5) {
            var ctx5 = theCanvas5.getContext("2d");
            if (ctx5) {

                var text = "Yo Quiero Taco Bell!";
                ctx5.fillText(text, 20, 20);

                ctx5.font = "35pt Impact";
                ctx5.fillText(text, 20, 70);

                ctx5.fillStyle = "red";
                ctx5.fillText(text, 20, 80);
            }
        }
        /*******************************************
         PART 6

         Pixel manipulation.
         Draw the image logo.png into the canvas in the following 3 ways.
         1. The image exactly as it is.
         2. Shrink the image by 50%
         3. Slice a section of the logo out and draw that onto the canvas.

         Reminder to use the drawImage method for all 3 of the ways.

         ********************************************/

//Draw images here


        /*******************************************
         PART 7

         Putting it all together.

         Using a combination of all the methods.
         Create a complex scene.
         You must use at least 3 different methods.

         ********************************************/

// Draw scene here

                var theCanvas7 = document.getElementById('Canvas7');
                if (theCanvas7) {
                    var ctx7 = theCanvas7.getContext("2d");
                    if (ctx7) {

                        for (var i = 5; i < 10; i++) {
                            ctx7.beginPath(); //starts a line.
                            ctx7.lineWidth = i + 1;
                            ctx7.moveTo(355, 55 + i * 15);
                            ctx7.lineTo(275, 25 + i * 15);
                            ctx7.stroke();


                        }


                    }
                }
            }
        };
