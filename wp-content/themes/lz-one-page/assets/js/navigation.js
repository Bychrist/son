/* global lz_one_pageScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

function lz_one_page_open() {
	document.getElementById("sidelong-menu").style.width = "250px";
}
function lz_one_page_close() {
	document.getElementById("sidelong-menu").style.width = "0";
}