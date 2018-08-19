<?php
require_once ("database.php");

class M_favicon_company extends database
{
    public function get_favicon_company(){
        $sql = "SELECT favicon FROM info_company WHERE id=1";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function update_favicon_company($favicon){
        $sql = "UPDATE info_company SET favicon=? WHERE id=1";
        $this->setQuery($sql);
        return $this->execute(array($favicon));
    }
}