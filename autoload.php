<?php
spl_autoload_register(function($classname){
    include explode('\\',$classname)[1].'.php';
});