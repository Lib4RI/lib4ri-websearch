<?php

$dirBase = '/var/www/html/web/';

/*
	make a copy of this this file is intended for:
		/var/www/html/index.php
		/var/www/html/web/index.php
		/var/www/html/web/search.php	// OBS
*/


if ( !( @include_once($dirBase.'search.protect.inc') ) ) { // trivial access check - include it first!
	header('HTTP/1.0 503 Service Unavailable');
	echo '503 Service Unavailable';
	exit;
}


echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">';


if ( $html = @file_get_contents($dirBase.'search/search.header.html') /* includes CSS */ ) { echo $html; };


echo '<body>';


echo '<div id="lib4ri-ch-navigation">';
if ( $html = @file_get_contents($dirBase.'search/search.navigation.html') ) { echo $html; }
echo '</div>';

echo '<div id="lib4ri-ch-websearch" style="margin-bottom:4ex;">';
$host = ( @empty($_SERVER['HTTP_X_FORWARDED_PROTO']) ? 'http' : $_SERVER['HTTP_X_FORWARDED_PROTO'] ) . '://' . $_SERVER['HTTP_HOST'];
if ( $html = @file_get_contents($host.'/web/search/drupal.node-code.php?abs=no&css=no&js=yes') ) { echo $html; }
echo '</div>';

echo '<div id="lib4ri-ch-footer" style="position:fixed; bottom:0px; width:100%">';
if ( $html = @file_get_contents($dirBase.'search/search.footer.html') ) { echo $html; }
echo '</div>';


echo '</body></html>';

?>