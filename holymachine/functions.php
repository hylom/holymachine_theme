<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */


/* check if entry have <!--more--> */
function has_more() {
    global $page, $pages;
    if ( $page > count($pages) ) // if the requested page doesn't exist
	$page = count($pages); // give them the highest numbered page that DOES exist
    
    $content = $pages[$page-1];
    return ( preg_match('/<!--more(.*?)?-->/', $content) != 0 );
}
 
