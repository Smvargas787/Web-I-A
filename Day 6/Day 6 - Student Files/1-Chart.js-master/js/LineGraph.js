$(function() { 
	
	var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");

    var lineChartData = {

        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                fillColor: "rgba(166, 209, 122, 0.5)",
                strokeColor: "rgba(166, 209, 122, 1)",
                pointColor: "rgba(166, 209, 122, 1)",
                pointStrokeColor: "#fff",
                data: [1,20,40,30,60,75,40]
            },
            {
                fillColor: "rgba(242, 140, 185, 0.5)",
                strokeColor: "rgba(242, 140, 185, 1)",
                pointColor: "rgba(242, 140, 185, 1)",
                pointStrokeColor: "#fff",
                data: [15, 30, 45, 60, 30, 60, 75]
            }
        ]
    }

    var options = {
        onAnimationComplete: done
    }

    var myLine = new Chart(ctx).Line(lineChartData, options);

    function done(){
        //save canvas image to data url
        var dataURL = canvas.toDataURL();
        document.getElementById('canvasImg').src = dataURL;
        $("#canvas").hide();
    }

});


