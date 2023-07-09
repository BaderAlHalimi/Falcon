<?php
// استدعاء الدالة الرئيسية
use framework\Route;

include 'autoload.php';

handleRoute();

function handleRoute()
{
    // الحصول على الروابط المخصصة من معرف "url" في الرابط
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
    } else {
        include 'storage/views/' . Route::run('/'); // قم بتغيير "/framework/" إلى الروت الصحيح
        exit;
    }
    // echo $_SERVER['PHP_SELF'];
    // echo end(str_split('/',Route::$urls[$url]));
    // exit;
    try {
        // echo Route::run($url);
        // exit;
        $var = explode('/', Route::run($url));
        // echo basename($_SERVER['PHP_SELF']);
        // echo end($var);
        // exit;
        if (basename($_SERVER['PHP_SELF']) == end($var)) {
            throw new Exception;
        }
        $value = Route::run($url);
        // print_r($value);
        // exit;
        include 'storage/views/' . $value;
    } catch (Throwable) {
        ob_clean();
        include '404.php';
    }
    // قسم الروابط باستخدام العنصر "/" كفاصلة بين الأقسام
    // $urlParts = explode('/', $url);

    // // استدعاء الدالة المناسبة بناءً على الروابط المخصصة
    // switch ($urlParts[0]) {
    //     case 'home':
    //         // تعيين صفحة الرئيسية
    //         echo 'صفحة الرئيسية';
    //         break;
    //     case 'about':
    //         // تعيين صفحة حول
    //         echo 'صفحة حول';
    //         break;
    //     case 'contact':
    //         // تعيين صفحة اتصل بنا
    //         echo 'صفحة اتصل بنا';
    //         break;
    //     default:
    //         // إذا لم يتطابق أي رابط، يمكنك تعيين صفحة خطأ 404
    //         echo 'خطأ 404: الصفحة غير موجودة';
    //         break;
    // }
}
