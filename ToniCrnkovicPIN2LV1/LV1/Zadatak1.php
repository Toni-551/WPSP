<?php

$x = "5";

if(is_int($x)){
    echo $x;
}else{
    echo "Pretvaran u int";
    echo (int)$x;
}
?>