<?php
/**
 * Created by PhpStorm.
 * User: Nesa1
 * Date: 3/1/2017
 * Time: 7:40 AM
 */
require_once "core/init.php";

class Data
{
    private static $_db;


    //dobavljanje podataka iz baze
    public function getData()
    {
        $data= self::$_db->query("SELECT * FROM news ORDER BY id DESC limit 9 ");
        $res = $data->fetchALL(PDO::FETCH_ASSOC);
        return $res;
    }

    //inicijalizacija konekcije sa bazom
    public static function init()
    {
        self::$_db = Conn::getInstance();
    }


}


Data::init();

