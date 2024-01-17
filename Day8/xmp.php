<?php

$file = file_get_contents("f.jpg");

$xmpStart = strpos($file, '<x:xmpmeta');
$xmpEnd = strpos($file, '</x:xmpmeta>') + 12;

if ($xmpStart !== false && $xmpEnd !== false) {
    $xmpData = substr($file, $xmpStart, $xmpEnd - $xmpStart);

    // Output the extracted XMP data for debugging
    echo "Extracted XMP Data:\n";
    echo $xmpData;

    // Use error handling for simplexml_load_string
    libxml_use_internal_errors(true);
    $xml = simplexml_load_string($xmpData);

    if ($xml !== false) {
        $title = $xml->xpath('//dc:title');
        $creator = $xml->xpath('//dc:creator');

        if (!empty($title)) {
            echo "Title: " . $title[0] . "\n";
        }
        if (!empty($creator)) {
            echo "Creator: " . $creator[0] . "\n";
        }
    } else {
        // Output XML parsing errors
        echo "Error parsing XML:\n";
        foreach (libxml_get_errors() as $error) {
            echo $error->message . "\n";
        }
        libxml_clear_errors();
    }
} else {
    echo "XMP data not found in the file.\n";
}
?>
