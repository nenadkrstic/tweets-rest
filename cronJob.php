<?php
/**
 * Created by PhpStorm.
 * User: Nesa1
 * Date: 3/2/2017
 * Time: 8:09 AM
 */

require_once "core/init.php";

$tweets = new Tweets;

$tweets->createRest();