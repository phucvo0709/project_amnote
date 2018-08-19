<?php
include ("check_permission.php");
include ("./../m_logo_company.php");

$m_logo_company = new M_logo_company();

//update hinh
$time = time();
$target_dir = "./../../../public/images/";
$target_file = $target_dir . basename($time . $_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$out = $m_logo_company->get_logo_company();
$logo = $out->logo;
$lastLogo = './../../../' . $logo;

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
                $update = $m_logo_company->update_logo_company($image);
                if($update){
                    if (file_exists($lastLogo)) {
                        unlink($lastLogo);
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

