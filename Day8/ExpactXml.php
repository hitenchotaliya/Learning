<?php

$parser=xml_parser_create();
function start($parser,$element_name,$element_attrs){
    switch($element_name){
        case "NOTE":
            echo "--Note--<br>";
            break;
        case "TO":
            echo "<br>To: ";
            break;
        case "FROM":
            echo "<br>From: ";
            break;
        case "HEADING":
            echo "<br>Heading: ";
            break;
        case "HEADING":
            echo "<br>Message:  ";
            break;

    }
}

function stop($parser,$element_name){
    "<br>";
}

function char($parser,$data){
    echo $data;
}

xml_set_element_handler($parser,"start","stop");

xml_set_character_data_handler($parser,"char");

$fp = fopen("test.xml","r");

while($data=fread($fp,4096)){
    xml_parse($parser,$data,feof($fp)) or die(sprintf("XML error : %s at line %d",
                                                        xml_error_string(xml_get_error_code($parser)),
                                                        xml_get_current_line_number($parser)));
}

xml_parser_free($parser);