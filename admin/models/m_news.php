<?php
require_once ("database.php");

class M_news extends database
{
    public function get_all_new(){
        $sql = "SELECT * FROM news ORDER BY time_upload DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function get_new($id){
        $sql = "SELECT * FROM news WHERE id =?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function add_new($title, $description, $content, $image, $view, $upload_by){
        //Insert
        $sql = "INSERT INTO news(title, description, content, image, view, upload_by) VALUES ( ?, ?, ?, ?, ?, ? )";
        $this->setQuery($sql);
        return $this->execute(array($title, $description, $content, $image, $view, $upload_by));
    }
    function update_new($title, $description, $content, $id){
        $sql = "UPDATE news SET title=?, description=?, content=?, last_update=NOW() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($title, $description, $content, $id));
    }
    function update_image_new($title, $description, $content, $image, $id){
        $sql = "UPDATE news SET title=?, description=?, content=?, image=?, last_update=NOW() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($title, $description, $content, $image, $id));
    }
    function delete_new($id){
        $sql = "DELETE FROM news WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}