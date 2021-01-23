<?php
	
	
	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
	

	require_once __DIR__ . '/../vendor/autoload.php';
	
	use app\core\Application;
	use \app\Controllers\SiteController;
	use \app\Controllers\AuthController;

	
	$app = new Application(dirname(__DIR__));	
	
	$app->router->get("/", [SiteController::class, 'home']);
	
	$app->router->get("/contact", [SiteController::class, 'contact']);
	
	$app->router->post("/contact", [SiteController::class, 'handleContact']);
	
	$app->router->get("/login", [AuthController::class, 'login']);

	$app->router->post("/login", [AuthController::class, 'login']);

	$app->router->get("/register", [AuthController::class, 'register']);

	$app->router->post("/register", [AuthController::class, 'register']);


	
	$app->run();