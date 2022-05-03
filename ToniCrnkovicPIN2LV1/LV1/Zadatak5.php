<?php
$string = "Ana";
$string = strtolower($string);
$newstring = "";
$polje = str_split($string);
$revpolje = array_reverse($polje);
if($polje ===$revpolje){
    echo "yes";
}else{
    echo "no";
}

?>