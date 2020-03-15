<?php 

/**
 * 
 * 
 */
function widgetButton($string)
{
	return 'View all '.strtolower($string);
}

/**
 * 
 * 
 */
function widgetText($string, $count = 0)
{
	$string = strtolower($string);
	return 'You have '.$count.' '.$string.' in your database. Click on button below to view all '.$string.'.';
}

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

/**
 * 
 * 
 */
 function viewIndex($folder) {

 	return $folder.'.index';
 }

 /**
 * 
 * 
 */
 function viewShow($folder) {
 	
 	return $folder.'.show';
 }