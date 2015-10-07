$(document).ready(function() {

    //when the form changes
    $('#mapForm').change(function(){

        //create a variable to hold selected data
        var selectedContinent = $('#mapForm option:selected').val();

        if(selectedContinent == "ALL"){
            //show the dots
            $('a.dot').slideDown(1000);
        }else{
            //show the dots in continent selected
            $('a.dot[continent = "'+selectedContinent+'"]').slideDown(1000);
            $('a.dot[continent != "'+selectedContinent+'"]').slideUp(1000);
        }
    })

    //dot code
    $('a.dot').click(function(){

        //remove selected class from dots
        $('a.dot').removeClass("selected");

        //add selected class to the clicked anchor
        $(this).addClass("selected");

        //create a variable to hold the path of the matching div
        var country = ".country_detail#"+$(this).attr("country");

        //variable to hold the html
        var htmlCode = $(country).html();

        //animate the container
        $(".detail_container").fadeOut(500, function(){
          $(".detail_container .country_detail").html(htmlCode);
            $(".detail_container").fadeIn(500);
        })
    })

});