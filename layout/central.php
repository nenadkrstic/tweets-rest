<?php
/**
 * Created by PhpStorm.
 * User: Nesa1
 * Date: 3/2/2017
 * Time: 10:39 AM
 */
$data = new Data;
foreach ($data->getData() as $news)
{
    echo '<div id = "news" class="col-md-3 text-center img-thumbnail">';
    echo '<img class="img-responsive" src="https://pbs.twimg.com/profile_images/663689249976287233/EBlfmBGK_normal.png" width="50px">';
    echo "<h4>".$news['news']."</h4>";
    echo "<h5><strong>Vest :</strong>".$news['descript']."</h5>";
    echo "<a href = {$news['url']}>Link B92</a><br>";
    echo "<a href = {$news['link']}>Prikaži više</a><br>";
    echo "<div class='row'>
                     <img src={$news['img']} class='img-thumbnail'>
                 </div>";
    echo "<h6><strong>Objavljeno :</strong>".$news['created_at']."</h6>";

    echo '</div>';
}