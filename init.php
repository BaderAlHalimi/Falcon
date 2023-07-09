<?php
$url = $_SERVER['REQUEST_URI'];
$array = explode('/', $url);
$string = end($array);
$url1 = $_SERVER['PHP_SELF'];
$url1 = explode('/', $url1);
$url1 = end($url1);
if ($string == $url1) {
    $url = str_replace('index.php', '',$url);
    header('Location:'.$url);
    exit;
}
