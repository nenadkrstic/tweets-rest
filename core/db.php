<?php
/**
 * Created by PhpStorm.
 * User: Nesa1
 * Date: 3/1/2017
 * Time: 7:09 AM
 */

class Conn{
    private static $_instance = null;
    public static $_host = '127.0.0.1';
    private static $_dbname = 'b92';
    private static  $_user = 'root';
    private static  $_pass ='';

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = self::$_instance = new PDO("mysql:host=".self::$_host.";dbname=".self::$_dbname."",self::$_user,self::$_pass);
        }
        return self::$_instance;
    }
}