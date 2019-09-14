<?php  
	// start session
	session_start();

	// include autoload
	require './include/fb-login/vendor/autoload.php';

	// 
	$FB = new Facebook\Facebook([
		'app_id' => '2088181491452730',
		'app_secret' => 'e91b96a59dc9596f9ebd2c4ca7eb413f'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>