<?php

$url ="https://www.coralnodes.com/feed/";

$handle=curl_init();
curl_setopt($handle, CURLOPT_URL,$url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER,true);
curl_setopt($handle,CURLOPT_FOLLOWLOCATION,true);

$response=curl_exec($handle);
curl_close($handle);

// var_dump($response);


$feed=new SimpleXMLElement($response);

// var_dump($feed);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML Parser</title>
</head>
<body>
    <?php
    foreach($feed->channel->item as $item) :  ?>
    <artical>
        <h2><?= $item->title ?></h2>
        <p><?= $item->description?></p>
        <div>
        <?php
        
            $dt= new DateTime($item->pubDate);
            $pub_date=$dt->format('l, F d y');

        ?>


            Written by<?= $item->children('dc' , true)->creator ?> on <?= 
            $pub_date?>
        </div>
    </artical>

    <?php endforeach; ?>
</body>
</html>