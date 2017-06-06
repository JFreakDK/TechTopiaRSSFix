<?php
    $doc = new DOMDocument();
    $doc->load( 'http://tv.ida.dk/audiopodcast/channel/16944635' );
    foreach ($doc->getElementsByTagNameNS('http://search.yahoo.com/mrss/','content') as $element) {
        $element->setAttribute('isDefault', 'false');
    }
    echo $doc->saveXML();
?>