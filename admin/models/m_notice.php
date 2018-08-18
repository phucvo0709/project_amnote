<?php
require_once ("database.php");

class M_notice extends database
{
    public function get_all_notice(){
        $sql = "SELECT n.*, u.full_name FROM notices n INNER JOIN users u ON u.id = n.upload_by ORDER BY n.id DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function get_notice($id){
        $sql = "SELECT * FROM notices WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function add_notice($title, $file, $upload_by){
        //Insert
        $sql = "INSERT INTO notices(title, file, upload_by) VALUES ( ?, ?, ? )";
        $this->setQuery($sql);
        return $this->execute(array($title, $file, $upload_by));
    }
    function update_notice($title, $id){
        $sql = "UPDATE notices SET title=?, last_update=NOW() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($title, $id));
    }
    function delete_notice($id){
        $sql = "DELETE FROM notices WHERE id =?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}