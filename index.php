<?php
/**
 * Created by PhpStorm.
 * User: Nesa1
 * Date: 3/1/2017
 * Time: 7:09 AM
 */

require_once "core/init.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Twiter</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="public/style.css">
</head>

<body>
<div class="row">
    <div id = "wraaper" class="container text-center">
        <div class = "jumbotron">
            <h1>Vesti B92</h1>
        </div>

        <?php

        $tweets = new Tweets;
        print_r($tweets->createRest());


        $data = new Data;
        foreach ($data->getData() as $news)
        {
            echo '<div id = "news" class="col-md-3 text-center img-thumbnail">';
            echo '<img class="img-responsive" src="https://pbs.twimg.com/profile_images/663689249976287233/EBlfmBGK_normal.png" width="50px">';
            echo "<h4>".$news['news']."</h4>";
            echo "<h5>".$news['descript']."</h5>";
            echo "<h6>".$news['created_at']."</h6>";
            echo "<a href = {$news['url']}>Link B92</a><br>";
            echo "<a href = {$news['link']}>Prikazi Vise</a><br>";
            echo '</div>';
        }
        ?>

    </div>
</div>


</body>

</html>