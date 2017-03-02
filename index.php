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
<?php require_once "layout/head.php"?>
</head>

<body>
<div class="row">
    <div id = "wraaper" class="container text-center">
        <div class = "jumbotron">
            <img src=' http://pbs.twimg.com/media/C55imK1WMAAk4oo.jpg' class='img-thumbnail'>
        </div>

        <?php
        require_once "layout/central.php";
        ?>

    </div>
</div>


</body>

</html>