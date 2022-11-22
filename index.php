<?php

require_once 'config/route.php';

get('/', 'pages/home.php');
get('/login', 'pages/auth/login.php');
get('/register', 'pages/auth/register.php');
get('/about', 'pages/about.php');
get('/product', 'pages/products.php');
get('/contact', 'pages/contact.php');
get('/cart', 'pages/cart.php');
get('/product/$id', 'pages/product_detail.php');

// any('/404', 'views/404.php');
