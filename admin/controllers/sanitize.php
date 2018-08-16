<?php

class Sanitize
{
    public function sanitize_input($inputData){
        $inputData = strip_tags($inputData); //loại bỏ thẻ html trong input
        return $inputData;
    }
}