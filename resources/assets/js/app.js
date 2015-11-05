"use strict";

jQuery.fn.animateAuto = function(prop, speed, callback){
    var elem, height, width;
    return this.each(function(i, el){
        el = jQuery(el), elem = el.clone().css({"height":"auto","width":"auto"}).appendTo(el.parent());
        height = elem.css("height"),
            width = elem.css("width"),
            elem.remove();

        if(prop === "height")
            el.animate({"height":height}, speed, callback);
        else if(prop === "width")
            el.animate({"width":width}, speed, callback);
        else if(prop === "both")
            el.animate({"width":width,"height":height}, speed, callback);
    });
}

$(function() {

    let searchOpen =  function() {
        $("#search-link").animate({ width: 0 }, 300, function() {
            $(this).css({ display: 'none' });
            $("#search-block").css({ display: 'inline-block' }).animateAuto( 'width', 500 );
            $("#search-block input").focus();
        });
    };

    let searchClose = function() {
        $("#search-block").animate({ width: 0 }, 300, function() {
            $(this).css({ display: 'none' });
            $("#search-link").css({ display: 'block' }).animateAuto( 'width', 500 );
        });
    };

    let searchToggle = function() {
        searchClose();
    };

    $("#search-link").click(function(e) {
        e.preventDefault();
        searchOpen();
    });

    $("#search-block input").blur(function (e) {
        searchClose();
    })

});