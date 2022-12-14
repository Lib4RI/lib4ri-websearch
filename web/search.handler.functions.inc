<?php

/*
	function to report an error message for/inside a json file
	Note, this is similar to method apiQueryUtils->exitByError in search.classes.inc - to be sync'ed/morged once!?
*/
function _lib4ri_exitByError( $eMsg = 'ERROR' ) {
	$eNum = intval($eMsg);
	if ( $eNum && @isset($GLOBALS['_websearch_error_list'][$eNum]) ) {	/* by search.protect.inc */
		$eMsg = $eNum . ' ' . $GLOBALS['_websearch_error_list'][$eNum];
		header( 'HTTP/1.0 ' . $eMsg );
	}
	header('Content-Type: ' . 'application/json' . ' charset=utf-8');
	print json_encode( array('error' => rtrim($eMsg)), JSON_PRETTY_PRINT );
	exit;
}

/*
	Trivial/limited function to replace 'placeholder terms' in a TWIG template. For full support see https://twig.symfony.com
	An assoc input array is required with, e.g. array( 'term1inTwig' => 'value1forTwig', 'term2inTwig' => 'value2forTwig', ... )
	Conventions:
	- Only two types of placeholders get replaced, normal like "{{ varName }}" and custom like "<!--{{ varName }}-->"
	- Syntaxwise space characters will matter here. On one hand I wanted to avoid the slower PREG_replace() (even if more powerful),
	  on the other hand "<!--{{ varName }}-->" will be parsed/replaced, while "<!-- {{ varName }} -->" stays hidden in displayed HTML.
*/
function _lib4ri_twigSimple( $repAry, $twigTemplate, $htmlUncomment = true ) {
	if ( $htmlUncomment ) {
		$twigTemplate = str_replace( array_map(function($s) { return '<!--{{ '.$s.' }}-->'; }, array_keys($repAry)), array_values($repAry), $twigTemplate);
	}
	return str_replace( array_map(function($s) { return '{{ '.$s.' }}'; }, array_keys($repAry)), array_values($repAry), $twigTemplate);
}
