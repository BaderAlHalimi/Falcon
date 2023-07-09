<?php

namespace framework;

use Exception;
use Throwable;

class Route
{
    public static $urls = array();
    public static function get($url, $page)
    {
        self::$urls[$url] = $page;
    }
    public static function run($url)
    {
        $url1 = substr($url, -1);

        if ($url1 == '/' && strlen($url) > 1) {
            $url = substr($url, 0, strlen($url) - 1);
        }
        if (isset(self::$urls[$url])) {
            return self::$urls[$url];
        }else{
            return '../../404.php';
        }
        // return $url1;
    }
    // public static function handleRoute($url = null)
    // {
    //     if (is_null($url)) {

    //         // الحصول على الروابط المخصصة من معرف "url" في الرابط
    //         if (isset($_GET['url'])) {
    //             $url = $_GET['url'];
    //         } else {
    //             include Route::run('/'); // قم بتغيير "/framework/" إلى الروت الصحيح
    //             exit;
    //         }
    //         try {
    //             if (basename($_SERVER['PHP_SELF']) == end(str_split('/', Route::$urls[$url]))) {
    //                 throw new Exception();
    //             }
    //             include Route::$urls[$url];
    //         } catch (Throwable) {
    //             ob_clean();
    //             include '404.php';
    //         }
    //     } else {
    //         include Route::run($url);
    //     }
    // }
}
