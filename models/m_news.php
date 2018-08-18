<?php
require_once ("database.php");

class M_news extends database
{
    function get_all_news() {
        $sql = "select * from news ORDER BY time_upload DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function get_new($id){
        $sql = "SELECT n.*, u.full_name FROM news n INNER JOIN users u ON u.id = n.upload_by WHERE n.id =?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function update_view_new($view, $id){
        $sql = "UPDATE news SET view=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($view, $id));
    }
}