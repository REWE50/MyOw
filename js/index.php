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
	
	$(function() {
    var pgurl = window.location.href.substr(window.location.href
            .lastIndexOf("/") + 1);
    $("#nav ul li a").each(function() {
        if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
            $(this).addClass("active");
    });

});
	
});




