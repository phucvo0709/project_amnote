<?php
require_once ("database.php");

class M_chart extends database
{
    function get_efficiency_more() {
        $sql = "select * from efficiencies LIMIT 6, 15";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}