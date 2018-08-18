<?php
include ("check_permission.php");
include ("./../m_slider.php");
$m_slider = new M_slider();

//sanitize data

$time = time();
$target_dir = "./../../../public/images/sliders/";
$target_file = $target_dir . basename($time . $_FILES["file"]["name"]);

if (isset($_FILES['file'])) {
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        $file = 'public/images/sliders/' . $time . $_FILES["file"]["name"];
        $upload = $m_slider->add_slider($file);
        if($upload){
            echo "<script>
                        location.reload();
                        </script>";
        }
    } else{
        echo "<p class='text-danger mt-2'>upload file error</p>";
    }
}


