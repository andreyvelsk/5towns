<?php
    $city_file = "pages/$city.php";
?>
<div class="mainview container">
    <div class="row">
        <div class="col-lg-3">
            <?php
            include 'pages/sidebar.php';
            ?>
        </div>

        <div class="content col-lg-9">
            <?php
            if(file_exists($city_file)) // если файл существует
                include "pages/$city.php"; // переход на страницу города по переменной city
            else
                include "pages/404.php"; // если файла нет, ошибка 404
            ?>
        </div>
    </div>
</div>