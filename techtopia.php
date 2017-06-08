<?php
    header('Content-Type: text/xml');

    $doc = new DOMDocument();
    $doc->load( 'https://tv.ida.dk/audiopodcast/channel/16944635' );
    foreach ($doc->getElementsByTagNameNS('http://search.yahoo.com/mrss/','content') as $element) {
        $element->setAttribute('isDefault', 'false');
    }
    echo $doc->saveXML();
?>
