<?php
/**
*
* Theme Functions
*
* @package MouadhTemplate
*
*/
function Hello_func(){

    return "<p>Hello i'm Mouadh Aouiti 26 years old softwar engineer, i'm PHP Developer WordPress Specialiste </p>";
}
add_shortcode( 'Hello', 'Hello_func' );
