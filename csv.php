<?php


function PostcodeCheck($postcode)
{
    $remove = str_replace(" ","", $postcode);
    $upper = strtoupper($remove);

    if( preg_match("/^\W*[1-9]{1}[0-9]{3}\W*[a-zA-Z]{2}\W*$/",  $upper)) {
        return $upper;
    } else {
        return false;
    }
}


$postcode = "abcd12";



if( PostcodeCheck($postcode) !== false ) {
    echo "Geldige : " . PostcodeCheck($postcode);
} else {
    echo "Ongeldige";
}

?>