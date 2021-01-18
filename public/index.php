<?php
	
	
	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
	

	require_once __DIR__ . '/../vendor/autoload.php';
	
	use app\core\Application;
	
	$app = new Application(dirname(__DIR__));
	
	$app->router->get("/", 'home');
	
	$app->router->get("/user", function () {
		return 4;
	});
	
	$app->router->get("/contact", 'contact');
	
	$app->router->post("/contact", function (){
		return "Handling submitted data";
	});
	
	$app->run();