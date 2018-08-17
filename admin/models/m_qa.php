<?php
require_once ("database.php");

class M_qa extends database
{
    public function get_all_qa(){
        $sql = "SELECT * FROM qa";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function add_qa($title, $content){
        //Insert
        $sql = "INSERT INTO qa(title, content) VALUES ( ?, ? )";
        $this->setQuery($sql);
        return $this->execute(array($title, $content));
    }
    function update_qa($title, $content, $id){
        $sql = "UPDATE qa SET title=?, content=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($title, $content, $id));
    }
    function delete_qa($id){
        $sql = "DELETE FROM qa WHERE id =?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}