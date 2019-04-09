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
                <li> <a href="#">Мужчинам</a> </li>
            </ul>
        </div>
        <div class="catalog__header">
            <h1>Мужчинам</h1>
            <p><span class="italic">Все товары</span></p>
        </div>
        <div class="filter">
            <select name="item-type" id="item-type">
                <option value="" hidden>Категория</option>
                <?php foreach( $page_data['cats'] as $key => $value) :?>
                <option value="<?=$value['id']?>"><?=$value['item-name']?></option>
                <?php endforeach?>
            </select>
            <select name="item-size" id="item-size">
                <option value="" hidden>Размер</option>
                <option value="">S</option>
                <option value="">M</option>
                <option value="">L</option>
                <option value="">XXL</option>
            </select>
            <select name="cost" id="item-cost">
                <option value="" hidden>Стоимость</option>
                <option value="">0 - 1000 руб</option>
                <option value="">1000 - 3000 руб</option>
                <option value="">3000 - 6000 руб</option>
                <option value="">6000 - 20000 руб</option>
            </select>
        </div>
        <div class="catalog-block">
        </div>
        <div class="catalog-pages-counter">
            <ul>
            </ul>
        </div>
    </div>
<?php
$server_enter = $_SERVER['DOCUMENT_ROOT'] ;
include($server_enter . '/modules/footer.php');
?>