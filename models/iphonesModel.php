<?php
require_once "BaseModel.php";

class Iphones extends DB{
    public function getAllIphones(){
        $result = $this->conn->prepare("SELECT * FROM disvourequest");
        $result->execute();
        $result = $result->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getIphone($id){
        $result = $this->conn->prepare("SELECT iphone_id,name, processor, iphone_description AS description,image, GROUP_CONCAT(category_name) AS categories, user_id FROM (SELECT tbl_iphones.iphone_id,name,processor,description AS iphone_description,image,category_id, user_id FROM tbl_iphones INNER JOIN tbl_iphones_categories ON tbl_iphones.iphone_id = tbl_iphones_categories.iphone_id) AS tbl_result INNER JOIN tbl_categories ON tbl_result.category_id = tbl_categories.category_id GROUP BY iphone_id ASC HAVING iphone_id = ?;");
        $result->bind_param("i",$id);
        $result->execute();
        $result = $result->get_result();
        return $result->fetch_assoc();
    }

    public function addIphone($args){
        $result = $this->conn->prepare("INSERT INTO disvourequest (firstname,lastname,natureofrequest,position,gmail,amount,idnumber) VALUES (?,?,?,?,?,?,?)");
        $result->bind_param("ssssssi",$args["firstname"],$args["lastname"],$args["natureofrequest"],$args["position"],$args["gmail"],$args["amount"],$args["user_id"]);
        $result->execute();
        $iphone_id = $result->insert_id;

        foreach ($args["category"] as $category){
            $cat_result = $this->conn->prepare("INSERT INTO tbl_iphones_categories (idnumber,category_id) VALUES (?,?)");
            $cat_result->bind_param("ii",$iphone_id,$category);
            $sequence_result = $cat_result->execute();
        }

        return $sequence_result;
    }

    public function updateIphone($id,$args){
        $result = $this->conn->prepare("UPDATE tbl_iphones SET name = ?,processor = ?,description = ?, image = ? WHERE iphone_id = ?");
        $result->bind_param("ssssi",$args["name"],$args["processor"],$args["description"],$args["image"],$id);
        $result->execute();

        // DROP CATEGORIES
        $drop_result = $this->conn->prepare("DELETE FROM tbl_iphones_categories WHERE iphone_id = ?");
        $drop_result->bind_param("i",$id);
        $drop_result->execute();

        foreach ($args["category"] as $category){
            $cat_result = $this->conn->prepare("INSERT INTO tbl_iphones_categories (iphone_id,category_id) VALUES (?,?)");
            $cat_result->bind_param("ii",$id,$category);
            $sequence_result = $cat_result->execute();
        }

        return $sequence_result;
    }

    public function deleteIphone($id){
        $result = $this->conn->prepare("DELETE FROM tbl_iphones WHERE iphone_id = ?");
        $result->bind_param("i",$id);
        return $result->execute();
    }
    
}


?>