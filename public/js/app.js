(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

jQuery.fn.animateAuto = function (prop, speed, callback) {
    var elem, height, width;
    return this.each(function (i, el) {
        el = jQuery(el), elem = el.clone().css({ "height": "auto", "width": "auto" }).appendTo(el.parent());
        height = elem.css("height"), width = elem.css("width"), elem.remove();

        if (prop === "height") el.animate({ "height": height }, speed, callback);else if (prop === "width") el.animate({ "width": width }, speed, callback);else if (prop === "both") el.animate({ "width": width, "height": height }, speed, callback);
    });
};

$(function () {

    var searchOpen = function searchOpen() {
        $("#search-link").animate({ width: 0 }, 300, function () {
            $(this).css({ display: 'none' });
            $("#search-block").css({ display: 'inline-block' }).animateAuto('width', 500);
            $("#search-block input").focus();
        });
    };

    var searchClose = function searchClose() {
        $("#search-block").animate({ width: 0 }, 300, function () {
            $(this).css({ display: 'none' });
            $("#search-link").css({ display: 'block' }).animateAuto('width', 500);
        });
    };

    var searchToggle = function searchToggle() {
        searchClose();
    };

    $("#search-link").click(function (e) {
        e.preventDefault();
        searchOpen();
    });

    $("#search-block input").blur(function (e) {
        searchClose();
    });
});

},{}]},{},[1]);
