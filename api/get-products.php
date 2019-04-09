<?php
require($_SERVER['DOCUMENT_ROOT'] . '/modules/DB.php'); // если подключения нет, то не будет работать весь код
require($_SERVER['DOCUMENT_ROOT'] . '/modules/funct.php'); 


$query = "SELECT * FROM `items`";

$request_cat = ($_GET['category'] != 0) ? " WHERE `category` = '{$_GET['category']}'" : '' ;

$productsOnPage = 2;

$lastProductNumber = $_GET['page'] * $productsOnPage;

$firstProductNumber = ($_GET['page'] - 1) * $productsOnPage + 1;

$query_2 = "SELECT * FROM `items` {$request_cat} LIMIT {$firstProductNumber}, {$lastProductNumber} ";

$categorySearch = mysqli_query($DB, $query_2);

$products = mysqli_query($DB, $query);

$catalogData = [
    'items' => [],
    'pagination' => [
        'CountPages' => [],
        'currentPage' => $_GET['page']
    ]
];

$productsCount = mysqli_num_rows($products);

$pages_count = ceil($productsCount / $productsOnPage);

$catalogData['pagination']['CountPages'] = $pages_count;

$all_products =[];

while( $result = mysqli_fetch_assoc($categorySearch) ){
    // print_r($result);
    array_push($catalogData['items'], $result);
};
echo json_encode($catalogData); //переводит массив в json

?>