<?php
$x=array(
    array(2,3,4),
    array(1,2,3),
    array(4,5,1)
);
$y=array(
    array(1,2,4),
    array(5,6,1),
    array(2,7,1)
);
for($i=0; $i<3;$i++ ){
    for ($j = 0; $j < 3; $j++)
    {
        $rj[$i][$j]=0;
        for ($k = 0; $k < 3; $k++){
            $rj[$i][$j]+=$x[$i][$k]*$y[$k][$j];
        }
    }
}
for($i=0; $i<3;$i++ ){
    for ($j = 0; $j < 3; $j++){
        echo " ".$rj[$i][$j];
    }
    echo "<br>";
}
?>