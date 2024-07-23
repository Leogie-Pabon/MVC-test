<?php
require_once "BaseModel.php";

class Categories extends DB{
    public function addCategory($args){
        $result = $this->conn->prepare("INSERT INTO tbl_categories(category_name) VALUES (?)");
        $result->bind_param("s",$args["category_name"]);
        return $result->execute();
    }

    public function getAllCategories(){
        $result = $this->conn->prepare("SELECT * FROM tbl_categories");
        $result->execute();
        $result = $result->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCategory($id){
        $result = $this->conn->prepare("SELECT * FROM tbl_categories WHERE category_id = ?");
        $result->bind_param("i",$id);
        $result->execute();
        $result = $result->get_result();
        return $result->fetch_assoc();
    }

    public function updateCategory($args){
        $result = $this->conn->prepare("UPDATE tbl_categories SET category_name = ? WHERE category_id = ?");
        $result->bind_param("si",$args["category_name"],$args["id"]);
        return $result->execute();
    }

    public function deleteCategory($id){
        $result = $this->conn->prepare("DELETE FROM tbl_categories WHERE category_id = ?");
        $result->bind_param("i",$id);
        return $result->execute();
    }
} 