<?php
$DB = mysqli_connect('localhost','root','','25012019_shop');
mysqli_set_charset($DB, "utf8");
sleep(1);

if(!$DB){
    echo 'Нет подключения к базе данных';
    die();
}
?>