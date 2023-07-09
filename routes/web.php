<?php
use framework\Route;
include './autoload.php';
Route::$urls = array();
Route::get('/','welcome.bridge.php');

include 'redirect.php';