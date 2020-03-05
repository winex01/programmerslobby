<?php 

use App\Quotes\Programming;

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

/**
 * 
 * 
 */
function randomQuote() {
	return Programming::quote();
}



