<?php
class UsersController{

	private $model;

	// LOAD THE MODEL
	function __construct(){
		require_once 'models/UsersModel.php';
		$this->model = new Users();
	}

	// ADD A USER
	function store(){
		if(!empty($_POST)) {
			$result = $this->model->addUser($_POST);
			if($result) {
				$_SESSION["success"]["user"] = "insert";
				header("Location:" . URL);
			}
		} 
	}

	// LOG THE USER IN
	function login(){
		if(!empty($_POST)){
			$user = $this->model->loginUser($_POST);
			if(!is_null($user)){
				$_SESSION["user"]["name"] = $user["name"];
				$_SESSION["user"]["type"] = $user["type"];
				$_SESSION["user"]["id"] = $user["user_id"];
				$_SESSION["success"]["user"] = "login";
				
			} else {
				$_SESSION["error"]["user"] = "login";
			}

			header("Location:" . URL);
		}
	}

	// AUTHENTICATE THE USER
	function authUser($user){
		if($user == "regular") {
			if(!isset($_SESSION["user"])) {
				header("Location:" . URL);
				exit();
			}
		} else if ($user == "administrator" ){
			if(!isset($_SESSION["user"]) || !($_SESSION["user"]["type"] == "administrator")) {
				header("Location:" . URL);
				exit();
			}
		}
	}

	// LOG USER OUT
	function logout(){
		unset($_SESSION["user"]);
		$_SESSION["success"]["user"] = "logout";
		header("Location:" . URL);

	}



}