<?php

    // отсекаем неправильные символы
    function clean_post_data($data){
        $data = strip_tags($data);
        $data = strtolower($data);
        $data = preg_replace('~[^a-z0-9 \x80-\xFF\-]~i', "",$data); 
        return $data;
    }
    // получаем переменную city
    $city = isset($_GET['city']) ? $_GET['city'] : 'yar';

include 'pages/header.php';
include 'pages/main.php';
include 'pages/footer.php';
?>