<?php
require_once ("database.php");

class M_index extends database
{
    function get_efficiency_index() {
        $sql = "select * from efficiencies LIMIT 0, 6";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function get_all_pricing() {
        $sql = "select * from prices";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function get_all_location_pricing() {
        $sql = "select * from prices_location";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function add_info($company, $address, $city, $sex, $name, $email, $phone){
        $sql = "INSERT INTO informations(company, address, city, sex, name, email, phone) VALUES ( ?, ?, ?, ?, ?, ?, ? )";
        $this->setQuery($sql);
        return $this->execute(array($company, $address, $city, $sex, $name, $email, $phone));
    }
    function add_contact($full_name, $email, $content){
        $sql = "INSERT INTO contacts(full_name, email, content) VALUES ( ?, ?, ? )";
        $this->setQuery($sql);
        return $this->execute(array($full_name, $email, $content));
    }
}