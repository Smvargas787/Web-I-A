//load the google vis library and core chart package
google.load("visualization", "1", {packages: ['corechart']});

//once loaded run function
google.setOnLoadCallback(drawChart);

//drawChart Function
function drawChart(){

    //create a data table using an array
    var data = google.visualization.arrayToDataTable([

        ['task', 'hours per day'],
        ['work', 8],
        ['eat', 2],
        ['commute', 2],
        ['watch tv', 2],
        ['sleep', 10]

    ]);

    //options for chart
    var options = {
        title: 'My daily Activities',
        pieHole: 0.4,
        pieSliceText: 'label',
        pieStartAngle: 100,
        legend: {position: 'labeled'},
        tooltip: {trigger: 'none'}
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    //draw the chart
    chart.draw(data, options);
}








