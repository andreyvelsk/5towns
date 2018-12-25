
<div class="mainview container">
    <div class="row">
        <div class="col-lg-3">
            <?php
            include 'pages/sidebar.php';
            ?>
        </div>

        <div class="content col-lg-9">
            <?php
            include "pages/$city.php"; // переход на страницу города по переменной city
            ?>
        </div>
    </div>
</div>