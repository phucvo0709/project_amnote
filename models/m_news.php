<?php
require_once ("database.php");

class M_news extends database
{
    function get_all_news() {
        $sql = "select * from news ORDER BY time_upload DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}