<!-- <?php

// $xmlDoc = new DOMDocument();
// $xmlDoc -> load("test.xml");

// print $xmlDoc->saveXML();
// ?> -->

<?php

$xmlDoc = new DOMDocument();
$xmlDoc -> load("test.xml");

$x = $xmlDoc->documentElement;
foreach($x->childNodes AS $item){
    print $item->nodeName. "=" . $item->nodeValue."<br>";   
}
?>
