<?php
include ("check_permission.php");
include ("./../m_notice.php");
include ("./../../controllers/sanitize.php");
$sanitize = new Sanitize();
$m_notice = new M_notice();

//sanitize data
$title = $sanitize->sanitize_input($_POST['title']);
$upload_by = $_SESSION['id'];

$time = time();
$target_dir = "./../../../public/files/";
$target_file = $target_dir . basename($time . $_FILES["file"]["name"]);
$uploadOk = 1;
if (isset($_FILES['file'])) {
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        $file = 'public/files/' . $time . $_FILES["file"]["name"];
        $upload = $m_notice->add_notice($title, $file, $_SESSION['id']);
        if($upload){
            echo "<script>
                        location.reload();
                        </script>";
        }
    } else{
        echo "<p class='text-danger mt-2'>upload file error</p>";
    }
}


