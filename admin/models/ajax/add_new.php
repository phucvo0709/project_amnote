<?php
include ("check_permission.php");
include ("./../m_news.php");
include ("./../../controllers/sanitize.php");

$sanitize = new Sanitize();
$m_news = new M_news();
//sanitize data
$title = $sanitize->sanitize_input($_POST['title']);
$description = $sanitize->sanitize_input($_POST['description']);
$content = $_POST['content'];

//add hinh
$time = time();
$target_dir = "./../../../public/images/news/";
$target_file = $target_dir . basename($time . $_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (isset($_FILES['image']))
{
    if($_FILES["image"]["size"] > 1000000){
        echo "<p class='text-danger mt-2'>File is not too 10MB</p>";
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ){
        echo "<p class='text-danger mt-2'>Not an image file</p>";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "<p class='text-danger mt-2'>upload image error</p>";
    }else{
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image = 'public/images/news/' . $time . $_FILES["image"]["name"];
            $upload = $m_news->add_new($title, $description, $content, $image, 1, $_SESSION['id']);
            if($upload){
                echo "<script>
                        location.reload();
                        </script>";
            }
        } else{
            echo "<p class='text-danger mt-2'>upload image error</p>";
        }
    }
}
else{
    echo "<p class='text-danger mt-2'>upload image error</p>";
}

