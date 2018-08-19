<?php
require_once ("database.php");

class M_info_company extends database
{
    public function get_info_company(){
        $sql = "SELECT * FROM info_company WHERE id=1";
        $this->setQuery($sql);
        return $this->loadRow();
    }
}