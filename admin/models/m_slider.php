<?php
require_once ("database.php");

class M_slider extends database
{
    public function get_all_slider(){
        $sql = "SELECT * from sliders ORDER BY id ASC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function get_slider($id){
        $sql = "SELECT * FROM sliders WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function add_slider($file){
        //Insert
        $sql = "INSERT INTO sliders(file) VALUES ( ? )";
        $this->setQuery($sql);
        return $this->execute(array($file));
    }
    function delete_slider($id){
        $sql = "DELETE FROM sliders WHERE id =?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}