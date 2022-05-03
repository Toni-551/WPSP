<?php
$x = array(1,2,3,4,5);
$y =array(3,4,5,1,2);
$string = (string)implode($x);
$string = $string.$string;
echo $string;
$needle = (string)implode($y);
if(strpos($string, $needle)!== false){
    echo "true";
}else{
    echo "false";
}
?>