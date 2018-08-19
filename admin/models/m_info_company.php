<?php
require_once ("database.php");

class M_info_company extends database
{
    public function get_info_company(){
        $sql = "SELECT * FROM info_company WHERE id=1";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function update_info_company($title, $description, $address, $phone1, $phone2, $fax, $email){
        $sql = "UPDATE info_company SET title=?, description=?, address=?, phone1=?, phone2=?, fax=?, email=? WHERE id=1";
        $this->setQuery($sql);
        return $this->execute(array($title, $description, $address, $phone1, $phone2, $fax, $email));
    }
}