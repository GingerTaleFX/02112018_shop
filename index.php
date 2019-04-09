<?php
// $title = 'Главная';
    include('modules/DB.php');
    include('modules/head.php');
    include('modules/header.php')
 ?>
<main class="main">
    <div class="wrapper">
        <div class="main__header">
            <h1>Новые поступления весны</h1>
            <p>Мы подготовили для Вас лучшие новинки сезона</p>
            <a href="#">Посмотреть новинки</a>
        </div>
        <div class="catalog">
            <div class="catalog__block">
                <div class="block-position">
                    <div class="catalog__subblock rectangle">
                        <a href="#">джинсовые <br>
                            куртки <br>
                            <span class="italic">New Arrival</span>
                        </a>
                    </div>
                    <div class="catalog__subblock square">
                    </div>
                </div>
                <div class="block-position">
                    <div class="catalog__subblock square">
                        <div class="help">
                        <div class="bang"></div>
                        <a href="#" class="italic">каждый сезон мы подготавливаем для 
                            Вас исключительно лучшую модну одежду. 
                            Следит за нашими новинками</a>
                        </div>
                    </div>
                    <div class="catalog__subblock square">
                        <a href="#">джинсы <br>
                            <span class="italic">от 3200 руб.</span>
                        </a>
                    </div>
                    <div class="catalog__subblock square">
                        <a href="#">&#8592; <br>
                        Аксессуары
                        </a>
                    </div>
                </div>
                <div class="block-position">
                   <div class="catalog__subblock square"></div>
                   <div class="catalog__subblock square">
                    <div class="help">
                        <div class="bang"></div>
                        <a href="#" class="italic">Самые низкие цены в Москве.
                                    Нашли дешевле? Вернем разницу.
                        </a>
                    </div>
                   </div>
                   <div class="catalog__subblock square">
                        <div class="overlay">
                            <a href="#">
                                Спортивная <br>
                                одежда<br>
                                <span class="italic">
                                от 590 руб.
                                </span>
                            </a>
                        </div>
                   </div> 
                </div>
                <div class="block-position">
                <div class="catalog__subblock square">
                        <a href="#">&#8592; <br>
                        Элегантная <br>
                    обувь <br>
                    <span class="italic">
                    ботинки, кросовки
                    </span>
                    </a>
                    </div>
                    <div class="catalog__subblock rectangle">
                    <a href="#">Детская <br>
                        одежда <br>
                        <span class="italic">New Arrival</span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="callback">
            <div class="wrapper">
                <div class="callback__position">
                    <h2>будь всегда в курсе выгодных предложений</h2>
                    <p>подписывайся и следи за новинками и выгодными предложениями.</p>
                    <form action="GET">
                        <input type="text" name="email" placeholder="e-mail">
                        <button type="submit"> Записаться</button>
                    </form>
                    <span class="inside-text_red italic">Некорректный e-mail. Попробуйте еще раз.</span>
                </div> 
            </div>
        </div>
    </div>
</main>
<?php
    include('modules/footer.php');
?>
</html>