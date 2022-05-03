<?php
function matrxdump($n, $m, $pos){
    for($i=0; $i<$n;$i++ ){
        for ($j = 0; $j < 3; $j++)
         {
             $matrix[$i][$j]=0;
         }
        }
    for($i=0; $i<count($pos);$i++ ){
       for ($j = 0; $j < 3; $j++)
        {
            if($j==0){
                $x=$pos[$i][$j];
            }elseif($j==1){
                $y=$pos[$i][$j];
            }elseif($j==2){
                $b=$pos[$i][$j];
                $matrix[$x][$y]=$b;
            }  
        } 
    }
    for($i=0; $i<3;$i++ ){
        for ($j = 0; $j < 3; $j++){
            echo " ".$matrix[$i][$j];
        }
        echo "<br>";
    }
}
$pos=array(
    array(0,0,1),
    array(1,1,2),
    array(1,2,3),
    array(2,2,5)
);
matrxdump(3,3, $pos);

?>