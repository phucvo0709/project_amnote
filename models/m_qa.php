<?php
require_once ("database.php");

class M_qa extends database
{
    function get_all_qa() {
        $sql = "select * from qa ORDER BY id ASC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}