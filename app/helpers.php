<?php 

/**
 * 
 * 
 */
function randomQuote() {
	return \App\Quotes\Programming::quote();
}

/**
 * 
 * 
 */
function removeWhiteSpaceAndSpecialChars($string) {

    return strip_tags(
    	html_entity_decode(
	    	preg_replace( "/\r|\n/", "", $string)
	    )
    );
}