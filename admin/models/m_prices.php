<?php
require_once ("database.php");

class M_prices extends database
{
    public function get_all_price(){
        $sql = "SELECT * FROM prices";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function get_all_location_price() {
        $sql = "select * from prices_location";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function add_price($price, $description, $special){
        //Insert
        $sql = "INSERT INTO prices(price, description, special) VALUES ( ?, ?, ? )";
        $this->setQuery($sql);
        return $this->execute(array($price, $description, $special));
    }
    public function add_location($id_price, $location){
        //Insert
        $sql = "INSERT INTO prices_location(id_prices, location) VALUES ( ?, ? )";
        $this->setQuery($sql);
        $this->execute(array($id_price, $location));
        $id = $this->getLastId();
        if($id){
            return $this->get_location($id);
        }
    }
    function get_location($id){
        $sql = "select * from prices_location where id=$id ";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    function update_price($price, $description, $special, $id){
        $sql = "UPDATE prices SET price=?, description=?, special=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($price, $description, $special, $id));
    }
    function update_location($location, $id){
        $sql = "UPDATE prices_location SET location=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($location, $id));
    }
    function delete_price($id){
        $sql = "DELETE FROM prices WHERE id =?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    function delete_location($id){
        $sql = "DELETE FROM prices_location WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}