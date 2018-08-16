<?php
require_once ("database.php");

class M_accounting_firm extends database
{
    public function get_all_firm(){
        $sql = "SELECT * FROM accounting_firm";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function add_firm($content){
        //Insert
        $sql = "INSERT INTO accounting_firm(content) VALUES ( ? )";
        $this->setQuery($sql);
        return $this->execute(array($content));
    }
    function update_firm($content, $id){
        $sql = "UPDATE accounting_firm SET content=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($content, $id));
    }
    function delete_firm($id){
        $sql = "DELETE FROM accounting_firm WHERE id =?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}