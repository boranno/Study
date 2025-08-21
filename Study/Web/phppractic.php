<?php
$b=5;


function prime($num){
    for($i=2; $i<= $num ;$i++){
        $c=0;
        for($j=2; $j<=sqrt($i); $j++){
            if($i%$j == 0){
                $c++;
                break;
            }
        }
        if($c == 0 ){
            echo $i . " is a prime number<br>";
        }
    }
}
//prime(10);
function printing()
{
    static $c=5;
    echo $c;
    $c++;
}
printing();
printing();
printing();









?>
