<?php
class AdminController{
private $model, $IphonesModel, $categoriesModel;

public function __construct(){
    require_once 'models/AdminModel.php';
    require_once 'models/IphonesModel.php';
    require_once 'models/CategoriesModel.php';
    $this->model = new AdminModel();
    $this->IphonesModel = new Iphones();
    $this->categoriesModel = new Categories();
}

public function dashboard(){
    $Iphones = $this->IphonesModel->getAllIphones();
    $Categories = $this->categoriesModel->getAllCategories();
    $user = $this->model->getAllUsers();
    $iphoneat = $this->model->getAlldisat();
    include 'views/dashboard.php';
}


}

?>