<?php

$xml = simplexml_load_file("example.xml");

foreach ($xml->element as $element) {
    $attributeValue = (string)$element['attribute'];
    $textContent = (string)$element;

    echo "Attribute: $attributeValue, Content: $textContent\n";
}
?>
