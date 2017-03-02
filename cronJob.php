<?php
require_once "layout/head.php";
/**
 * Created by PhpStorm.
 * User: Nesa1
 * Date: 3/2/2017
 * Time: 8:09 AM
 */

require_once "core/init.php";
//tweets-rest/croneJob.php pozvati iz cPanela i podesiti vreme izvrsavnja faila
try {
    $tweets = new Tweets;
    $tweets->createRest();
} catch (Exception $e) {
   echo"<div class='error'>";
    die("Could not connect to the rest api b92<br>" . $e->getMessage());
   echo "</div>";
}