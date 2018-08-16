<?php
require_once ("database.php");

class M_notice extends database
{
    function get_all_notice() {
        $sql = "select * from notices ORDER BY time_upload DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}