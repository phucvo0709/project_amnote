<?php
require_once ("database.php");

class M_accounting_firm extends database
{
    function get_all_accounting_firm() {
        $sql = "select * from accounting_firm";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}