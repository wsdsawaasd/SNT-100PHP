<?php
function isPrime($N)
{
    if ($N < 2) {
        return false;
    }
    for ($i = 2; $i < $N; $i++) {
        if ($N % $i === 0) {
            return false;
        }
    }
    return true;
}

for ($i = 0 ; $i < 100 ; $i++ ) {
    if (isPrime($i)) {
        echo  $i . "<br/>" ;
    }
}




