<?php
require_once ("database.php");

class M_efficiencies extends database
{
    public function get_all_efficienci(){
        $sql = "SELECT * FROM efficiencies";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function add_efficienci($icon, $title){
        //Insert
        $sql = "INSERT INTO efficiencies(icon, title) VALUES ( ?, ? )";
        $this->setQuery($sql);
        return $this->execute(array($icon, $title));
    }
    function update_efficienci($icon, $title, $id){
        $sql = "UPDATE efficiencies SET icon=?, title=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($icon, $title, $id));
    }
    function delete_efficienci($id){
        $sql = "DELETE FROM efficiencies WHERE id =?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}