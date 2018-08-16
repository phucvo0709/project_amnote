<?php
require_once ("database.php");

class M_other_services extends database
{
    public function get_all_service(){
        $sql = "SELECT * FROM other_services";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function add_service($content){
        //Insert
        $sql = "INSERT INTO other_services(content) VALUES ( ? )";
        $this->setQuery($sql);
        return $this->execute(array($content));
    }
    function update_service($content, $id){
        $sql = "UPDATE other_services SET content=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($content, $id));
    }
    function delete_service($id){
        $sql = "DELETE FROM other_services WHERE id =?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}