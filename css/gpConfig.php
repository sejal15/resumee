<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '973038327273-4uggojmathe6brrqcqsim3584kro61vu.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'uA8TwldAK4C1VVYTLvYc42w3'; //Google client secret
$redirectURL = 'https://food2-c9559.firebaseapp.com'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>