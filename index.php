<?php

session_start();



define("URL", "http://localhost/newdis/");

if (isset($_GET['url'])){
	$url = explode("/", $_GET['url']);
} else {
	$url = "home";
}

require_once "controllers/IphonesController.php";
require_once "controllers/CategoriesController.php";
require_once "controllers/usersController.php";
require "controllers/AdminController.php";
$AdminController= new AdminController();
$iphonesController = new IphonesController();
$categoriesController = new CategoriesController();
$usersController = new UsersController();


if ($url[0] === "home" || empty($url)) {
	$iphonesController->index();
} else if ($url[0] == "iphone" && ctype_digit($url[1]) && !isset($url[2])) {
	$iphonesController->show($url[1]);
} else if ($url[0] == "iphone" && $url[1] == "add") {
	$usersController->authUser("regular");
	$iphonesController->create();
} else if ($url[0] == "iphone" && $url[1] == "insert"){
	$usersController->authUser("regular");
	$iphonesController->store();
} else if ($url[0] == "iphone" && $url[1] == "delete"){
	$usersController->authUser("regular");
	$iphonesController->delete();
} else if ($url[0] == "iphone" && ctype_digit($url[1]) && $url[2] == "edit"){
	$usersController->authUser("regular");
	$iphonesController->edit($url[1]);
} else if ($url[0] == "iphone" && $url[1] == "update") {
	$usersController->authUser("regular");
	$iphonesController->update();
} else if ($url[0] == "category" && $url[1] == "add") {
	$usersController->authUser("administrator");
	$categoriesController->create();
} else if ($url[0] == "category" && $url[1] == "insert") {
	$usersController->authUser("administrator");
	$categoriesController->store();
} else if ($url[0] == "category" && ctype_digit($url[1]) && $url[2] == "edit"){
	$usersController->authUser("administrator");
	$categoriesController->edit($url[1]);
} else if ($url[0] == "category" && $url[1] == "update") {
	$usersController->authUser("administrator");
	$categoriesController->update();
} else if ($url[0] == "category" && $url[1] == "delete"){
	$usersController->authUser("administrator");
	$categoriesController->delete();
} else if ($url[0] == "user" && $url[1] == "add"){
	$usersController->store();
} else if ($url[0] == "user" && $url[1] == "login"){
	$usersController->login();
} else if ($url[0] == "user" && $url[1] == "logout"){
	$usersController->authUser("regular");
	$usersController->logout();
} else if ($url[0] == "admin" && $url[1] == "dashboard"){
	$AdminController->dashboard();
} else if ($url[0] == "about-us") {
	include 'views/about.php';
} else if ($url[0] == "contact-us"){
	include 'views/contact-us.php';
} else {
	include 'views/404.php';
}

?>