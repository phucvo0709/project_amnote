<?php
session_start();

class C_logout{
    function logout(){
        //models
        include("models/m_logout.php");
        $m_logout = new M_logout();
        $m_logout->logout();
    }
}
?>