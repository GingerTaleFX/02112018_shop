<?php
$page_data = [];

$query = "SELECT * FROM `categories` WHERE `parent_id` = 0 "; //все родительные категории
$cats = mysqli_query($DB, $query);

while( $parent = mysqli_fetch_assoc($cats) ) {           //используется для перебора содержимого, которое пришло из базы данных
    $page_data['parent_cats'][] = $parent; //автоматически добавился массив parent_cats, $parent будет добавить в подмассив, который идет в следующих пустых скобках
};

$find_cat = '';
$find_cat = (empty($_GET)) ? 1 : $_GET['cat'] ; //подробное разъяснение в уроке 46

// ar($page_data);


$query = "SELECT * FROM `categories` WHERE `parent_id` = {$find_cat} "; //Для женщин
$cats = mysqli_query($DB, $query);

while ($parent = mysqli_fetch_assoc($cats) ) {
    $page_data['cats'][] = $parent;
};

// ar($page_data);

// $find_id = '';
// $query = "SELECT * FROM `categories` WHERE `parent_id` = '{$_GET[]}'";




?>
<body>
<div class="wrapper">
<header class="header">
    <div class="header__block">
        <div class="logo"></div>
        <nav class="navigation">
            <?php foreach( $page_data['parent_cats'] as $key => $value) :?>
            <a class="navigation__link" href="catalog.php?cat=<?=$value['id']?>"><?=$value['item-name']?></a>
            <?php endforeach ?>
            <a class="navigation__link" href="#">Новинки</a>
            <a class="navigation__link" href="#">О нас</a>
        </nav>
        <div class="mob-menu">
            <div id="FirstLine"></div>
            <div id="SecondLine"></div>
            <div id="ThirdLine"></div>
            <div id="FourthLine"></div>
        </div>
    </div>
    <div class="header__block">
        <div class="login">
            <div class="login__pic"></div>
            <div class="login__text"></div>
            Привет, Алексей (<span class="inside-text inside-text_orange">выйти</span>)
        </div>
        <div class="bascet">
            <div class="bascet__pic"></div>
            <div class="bascet__text">Корзина(5)</div>
        </div>
    </div>
</div>
</header>