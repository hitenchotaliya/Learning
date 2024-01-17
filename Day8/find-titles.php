<?php

$url ="https://www.coralnodes.com/feed/";

$handle=curl_init();
curl_setopt($handle, CURLOPT_URL,$url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER,true);
curl_setopt($handle,CURLOPT_FOLLOWLOCATION,true);

$response=curl_exec($handle);
curl_close($handle);

$feed=new SimpleXMLElement($response);

$titles = $feed->xpath('/   rss/channel/item/title');

// var_dump($titles);

foreach ($titles as $title) {
    echo $title . "<br>";
}
?>