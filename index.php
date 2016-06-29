<?php

require "settings.php";
require "include/rb.php";
require "vendor/autoload.php";

session_start();

/* This is to temporarily work around QueerID not yet existing. */

// nothing here yet.

/* End of temporary workaround. */

/* Temporarily work around DB */

$bigimage[] = array("url" => "http://lorempixel.com/g/1900/1080/people", "text" => "Image 1", "is_first" => true);
$bigimage[] = array("url" => "http://lorempixel.com/g/1900/1080/abstract", "text" => "Image 2");
$bigimage[] = array("url" => "http://lorempixel.com/g/1900/1080/nature", "text" => "Image 3");

$item[] = array("service" => "deed-poll", "icon" => "check", "header" => "Deed Poll for Change of Name", "text" => "We went to the store to buy some ice cream but it all had dairy. Wah");
$item[] = array("service" => "stat-dec", "icon" => "gift", "header" => "Statutory Declaration for Change of Name", "text" => "Chico tried to eat the cat's food, but the cat said no and threw her waterbowl at him. He was not happy.");
$item[] = array("service" => "gender-letter", "icon" => "compass", "header" => "Doctor's Letter confirming change of gender", "text" => "The piano is a cool intrument, but it's got nothing on the trombone because actually the trombone means it's walk time.");

/* End of temporary workaround. */

R::setup('mysql:host='.$settings['database']['server'].'; dbname='.$settings['database']['database'],$settings['database']['username'],$settings['database']['password']);

$url = preg_replace("/^\//", '', $_SERVER['REQUEST_URI']);
if(!$url){ $url = "home"; }

$m = new Mustache_Engine(array(
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/mustache_templates')
));

$bodyModel = array(
	"site_title" => $settings['site']['title'],
	"header_images" => $bigimage,
	"page_items" => $item
);

if($url == "home"){
	$body = $m->loadTemplate("home");
	echo $body->render($bodyModel);
}