<?php 


if (! function_exists('paginationEntries')) {
	/*
	*
	*/
	function paginationEntries() {
		return 6;
	}
}


if (! function_exists('widgetButton')) {
	/**
	 * 
	 */
	function widgetButton($string)
	{
		return 'View all '.strtolower($string);
	}
}


if (! function_exists('widgetText')) {
	/**
	 * 
	 */
	function widgetText($string, $count = 0)
	{
		$string = strtolower($string);
		return 'You have '.$count.' '.$string.' in your database. Click on button below to view all '.$string.'.';
	}
}


if (! function_exists('removeWhiteSpaceAndSpecialChars')) {
	/**
	 * 
	 */
	function removeWhiteSpaceAndSpecialChars($string) {

	    return strip_tags(
	    	html_entity_decode(
		    	preg_replace( "/\r|\n/", "", $string)
		    )
	    );
	}
}


if (! function_exists('shortenString')) {
	/**
	 * 
	 */
	function shortenString($string, $limit = 180) {

		return str_limit(strip_tags($string), $limit);
	}
}


if (! function_exists('viewIndex')) {
	/**
	 * 
	 */
	 function viewIndex($folder) {

	 	return $folder.'.index';
	 }
 }


if (! function_exists('viewShow')) {
	 /**
	 * 
	 */
	 function viewShow($folder) {
	 	
	 	return $folder.'.show';
	 }
 }


if (! function_exists('viewCreate')) {
	 /**
	 * 
	 */
	 function viewCreate($folder) {
	 	
	 	return $folder.'.create';
	 }
 }


if (! function_exists('viewEdit')) {
	 /**
	 * 
	 */
	 function viewEdit($folder) {
	 	
	 	return $folder.'.edit';
	 }
 }