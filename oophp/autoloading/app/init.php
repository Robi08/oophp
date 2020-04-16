<?php 

// require 'Product/InfoProduct.php';
// require 'Product/Product.php';
// require 'Product/CetakInfoProduct.php';
// require 'Product/Komik.php';
// require 'Product/Game.php';

spl_autoload_register(function($class)
{
	require __DIR__ . '/Product/'. $class .'.php';
});