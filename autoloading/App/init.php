<?php

// require_once 'App/Produk/CetakInfoProduk.php';
// require_once 'App/Produk/InfoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/Game.php';

spl_autoload_register(function ($class) {
    require_once 'Produk/' . $class . '.php';
});
