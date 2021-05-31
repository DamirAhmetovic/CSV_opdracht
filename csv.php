<?
    $file = "Postcode.txt";
    $contents = file_get_contents($file);
    $lines = explode("\n", $contents); 

    foreach($lines as $Postcode) {
        echo $Postcode; ?>
        <br>
    <? } ?>