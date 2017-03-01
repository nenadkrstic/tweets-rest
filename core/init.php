<?php
/**
 * Created by PhpStorm.
 * User: Nesa1
 * Date: 3/1/2017
 * Time: 7:12 AM
 */

require_once "db.php";

spl_autoload_register(function($className){
   require_once "classes/{$className}.class.php";
});