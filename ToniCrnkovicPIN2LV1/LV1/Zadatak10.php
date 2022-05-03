<?php
function Fibonacci($n){
    global $fib;
    if($n <sizeof($fib)-1 && $n>-1){
        return $fib[$n];
    }
    for($i=sizeof($fib); $i<=$n; $i++){
        $fib[$i]=$fib[$i-1]+$fib[$i-2];
    }
    return $fib[$n];
}


$fib[0]=1;
$fib[1]=1;
echo Fibonacci(5);
?>