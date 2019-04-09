<?php 
$server_enter = $_SERVER['DOCUMENT_ROOT'] ;
$title = 'Мужчинам - каталог товаров';
include($server_enter . '/modules/head.php');
include($server_enter . '/modules/header.php');
?>
<body>
    <div class="wrapper">
    <div class="breadcrumbs">
            <ul>
                <li><a href="#">Главная</a> / </li>
                <li> <a href="#">Мужчинам</a> / </li>
                <li> <a href="#">Обувь</a> / </li>
                <li> <a href="#">Кеды с полоской</a></li>
            </ul>
        </div>
    <div class="item__big-pic">
    </div>
    <div class="item__full-information">
        <div class="item__header">
            <h2>Кеды с полоской</h2>
        </div>
        <div class="item__stock-number">
            <p>Артикул: 385904</p>
        </div>
        <div class="item__cost">
            <p>
                <span class="italic">
                    4500 руб.
                </span>
        </p>
        </div>
        <div class="item_description">
            <p>
            Отличные куды из водонепроницаемого материала. Отлично подходят для любой погоды. <br>
            Приятно сидят на ноге, стильные и комфортные
            </p>
        </div>
        <div class="item__size-header">
            <p>Размер</p>
        </div>
        <div class="item__sizes">
            <ul>
                <li> <a href="#">38</a> </li>
                <li><a href="#">39</a></li>
                <li><a href="#">40</a></li>
                <li><a href="#">41</a></li>
                <li><a href="#">42</a></li>
            </ul>
        </div>
        <div class="item__buy-button">
            <button type="submit">
                Добавить в корзину
            </button>
        </div>
    </div>
</div>


<?php
$server_enter = $_SERVER['DOCUMENT_ROOT'] ;
include($server_enter . '/modules/footer.php');
?>