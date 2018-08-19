<?php
include ("check_permission.php");
include ("./../m_favicon_company.php");

$m_favicon_company = new M_favicon_company();

//update hinh
$time = time();
$target_dir = "./../../../public/images/";
$target_file = $target_dir . basename($time . $_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$out = $m_favicon_company->get_favicon_company();
$favicon = $out->favicon;
$lastFavicon = './../../../' . $favicon;

if(isset($_FILES['image']['name'])){
    if($_FILES['image']['name'] !== ""){
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
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
                $image = 'public/images/' . $time . $_FILES["image"]["name"];
                $update = $m_favicon_company->update_favicon_company($image);
                if($update){
                    if (file_exists($lastFavicon)) {
                        unlink($lastFavicon);
                    }
                    echo "<script>
                        location.reload();
                        </script>";
                }
            }else{
                echo "<p class='text-danger mt-2'>upload image error</p>";
            }
        }
    }else{
        echo "<script>
                        location.reload();
                        </script>";
    }
}

