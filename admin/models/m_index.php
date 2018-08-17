<?php
require_once ("database.php");

class M_index extends database
{
    public function get_all_information(){
        $sql = "SELECT * FROM informations ORDER BY date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function get_all_contact(){
        $sql = "SELECT * FROM contacts ORDER BY date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}