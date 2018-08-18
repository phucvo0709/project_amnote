<?php
require_once ("database.php");

class M_notice extends database
{
    function get_all_notice() {
        $sql = "SELECT n.*, u.full_name FROM notices n INNER JOIN users u ON u.id = n.upload_by ORDER BY n.id DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}