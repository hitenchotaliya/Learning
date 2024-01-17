<?php

$url ="https://www.coralnodes.com/feed/";

$handle=curl_init();
curl_setopt($handle, CURLOPT_URL,$url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER,true);
curl_setopt($handle,CURLOPT_FOLLOWLOCATION,true);

$response=curl_exec($handle);
curl_close($handle);

$feed=new SimpleXMLElement($response);

$sitemap = new SimpleXMLElement('<urlset></urlset>');

$sitemap->attributes("xmlns","http://www.sitemaps.org/schemas/sitemap/9.0");


foreach ($feed->channel->item  as $item) {
    $url=$sitemap->addChild("url");
    $url->addChild("loc",$item->link);
    $url->addChild("changefreq","monthly");
}

$saved_sitemap=$sitemap->asXML();
echo $saved_sitemap;
file_put_contents("sitemap.xml",$saved_sitemap);
?>