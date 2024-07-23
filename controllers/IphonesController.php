<?php
class IphonesController{

	private $iphonesModel,$categoriesModel;

	// LOAD THE MODEL
	function __construct(){
		require_once 'models/iphonesModel.php';
		require_once 'models/CategoriesModel.php';
		$this->iphonesModel = new iphones();
		$this->categoriesModel = new Categories();
	}

	// INDEX - SHOW HOMEPAGE
	function index(){
		$iphones = $this->iphonesModel->getAlliphones();
		$categories = $this->categoriesModel->getAllCategories();
		include 'views/homepage.php';
	}
	
	// SHOW ADD A iphone PAGE
	function create(){
		$categories = $this->categoriesModel->getAllCategories();
		include 'views/iphones/add-iphone.php';
	}

	// ADD A iphone
	function store(){
		
				$args = $_POST;
				$result = $this->iphonesModel->addiphone($args);
				if($result) {
					$_SESSION["success"]["iphone"] = "insert";
					header("Location:" . URL);
				}
			
		
	}

	// SHOW EDIT PAGE
	function edit($id){
		$iphone = $this->iphonesModel->getiphone($id);
		$categories = $this->categoriesModel->getAllCategories();
		include 'views/iphones/edit-iphone.php';
	}

	// PERFORM THE ACTUAL UPDATE
	function update(){
		$iphone = $this->iphonesModel->getiphone($_POST['id']);
		if(!empty($_POST)){
			if($_FILES['image']['size'] == 0) {
				$image = $iphone['image'];
			} else {
				move_uploaded_file($_FILES['image']['tmp_name'], 'public/images/' . $_FILES['image']['name']);
				$image = $_FILES['image']['name'];
			}

			$args = $_POST;
			$args['image'] = $image;
			$result_update = $this->iphonesModel->updateiphone($_POST['id'],$args);

			if($result_update) {
				$_SESSION["success"]["iphone"] = "update";
				header("Location:" . URL . "iphone/" . $iphone['iphone_id']);
			}
		}
	}

	// SHOW ONE iphone
	function show($id){
		$iphone = $this->iphonesModel->getiphone($id);
		include 'views/iphones/iphone.php';
	}

	// DELETE ONE iphone
	function delete(){
		if(!empty($_POST)){
			if($this->iphonesModel->deleteiphone($_POST['iphone_id'])) {
				$_SESSION["success"]["iphone"] = "delete";
				header("Location:" . URL);
			}
		}
	}

	// SHOW iphoneS BY QUERY
	function showiphonesByQuery($query){
		include 'views/search-results.php';
	}

}