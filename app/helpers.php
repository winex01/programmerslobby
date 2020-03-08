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

/**
 * 
 * 
 */
function shortenString($string, $limit = 180) {

	return str_limit(strip_tags($string), $limit);
}