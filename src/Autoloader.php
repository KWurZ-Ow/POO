<?php
class Autoloader
{
    static function register(){
        spl_autoload_register(function($class){
            $class = 'src/'. str_replace("\\", '/', $class).'.php';
            if (is_file($class)){
                require_once($class);
            }
        });
    }
}