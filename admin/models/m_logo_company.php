<?php
require_once ("database.php");

class M_logo_company extends database
{
    public function get_logo_company(){
        $sql = "SELECT logo FROM info_company WHERE id=1";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function update_logo_company($logo){
        $sql = "UPDATE info_company SET logo=? WHERE id=1";
        $this->setQuery($sql);
        return $this->execute(array($logo));
    }
}