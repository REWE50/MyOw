// JavaScript Document

$(document).ready(function() {
    $( "#fb" ).mouseover(function(){
        $(this).attr("src", "images/fb-hover.png");
    });

    $( "#fb" ).mouseout(function(){
        $(this).attr("src", "images/fb.png");
    });
	
	$( "#twitter" ).mouseover(function(){
        $(this).attr("src", "images/twitter-hover.png");
    });

    $( "#twitter" ).mouseout(function(){
        $(this).attr("src", "images/twitter.png");
    });
		
});




