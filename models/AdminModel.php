<?php
require_once "BaseModel.php";
class AdminModel extends DB{

    public function getAllUsers(){
        $result = $this->conn->prepare("SELECT * FROM tbl_users");
        $result->execute();
        $result = $result->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAlldisat(){
        $result = $this->conn->prepare("SELECT * FROM disvourequest");
        $result->execute();
        $result = $result->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    } 
}
?>