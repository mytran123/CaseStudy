<?php
include_once "Database/DB.php";
include_once "Model/BaseModel.php";

class NoteModel extends BaseModel
{
    protected $table = "notes";

    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`,`price`,`description`) VALUES(?,?,?)";
        $stmt = $this->dbConnect->prepare($sql); //chuan bi truy van
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["price"]);
        $stmt->bindParam(3,$data["description"]);
        $stmt->execute(); //thuc thi
    }
}