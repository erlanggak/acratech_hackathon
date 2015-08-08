<?php

/*
|--------------------------------------------------------------------------
| Instagram
|--------------------------------------------------------------------------
|
| Instagram client details
|
*/

$config['instagram_client_name']	= 'Jakarta Tourism';
$config['instagram_client_id']		= '14fe48638b634d2c9a0bf577fa19ec62';
$config['instagram_client_secret']	= 'b98f2fbc67c349a7a393e162473f7a93';
$config['instagram_callback_url']	= 'http://acratech.bubwindonesia.com';
$config['instagram_website']		= 'http://acratech.bubwindonesia.com';
$config['instagram_description']	= 'Tourism Social network in Jakarta';

/**
 * Instagram provides the following scope permissions which can be combined as likes+comments
 * 
 * basic - to read any and all data related to a user (e.g. following/followed-by lists, photos, etc.) (granted by default)
 * comments - to create or delete comments on a user’s behalf
 * relationships - to follow and unfollow users on a user’s behalf
 * likes - to like and unlike items on a user’s behalf
 * 
 */
$config['instagram_scope'] = 'basic';

// There was issues with some servers not being able to retrieve the data through https
// If you have this problem set the following to FALSE 
// See https://github.com/ianckc/CodeIgniter-Instagram-Library/issues/5 for a discussion on this
$config['instagram_ssl_verify']		= TRUE;