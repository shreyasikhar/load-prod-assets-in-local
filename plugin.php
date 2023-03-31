<?php
// Enter the local site url and production site url by replacing example links
const LOCAL_SITE_URL = 'example.local';
const PROD_SITE_URL = 'example.com';

add_filter( 'wp_get_attachment_url', function( $url ) {

	return str_replace( LOCAL_SITE_URL, PROD_SITE_URL, $url );

}, 999 );


add_filter( 'wp_get_attachment_image_src', function( $image ) {

	$image[0] = str_replace( LOCAL_SITE_URL, PROD_SITE_URL, $image[0] );
	return $image;

}, 999 );


add_filter( 'the_content', function( $content ) {

	return str_replace( LOCAL_SITE_URL, PROD_SITE_URL, $content );

}, 999 );


add_filter( 'upload_dir', function( $uploads ) {
	$uploads['url'] = str_replace( LOCAL_SITE_URL, PROD_SITE_URL, $uploads['url'] );
	$uploads['baseurl'] = str_replace( LOCAL_SITE_URL, PROD_SITE_URL, $uploads['baseurl'] );

	return $uploads;
}, 999 );
