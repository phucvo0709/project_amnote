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
}