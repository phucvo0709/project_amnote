<?php
require_once ("database.php");

class M_other_service extends database
{
    function get_limit_other_service($limit) {
        $sql = "select * from other_services ORDER BY id ASC limit 0, $limit";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}