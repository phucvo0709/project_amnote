<?php
include ("check_permission.php");
include ("./../m_slider.php");
$m_slider = new M_slider();

if(isset($_POST['delete_id'])){
    $slider = $m_slider->get_slider($_POST['delete_id']);
    $file = './../../../' . $slider->file;
    if (file_exists($file)) {
        unlink($file);
    }
    return $m_slider->delete_slider($_POST['delete_id']);
}