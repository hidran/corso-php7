<?php
declare(strict_types=1);

function sum(?int $a= null , ?int $b = null ) : ?int{
    if( $a === null && $b === null){
        return null;
    }
    return $a + $b;
    
}
$result = sum();
var_dump($result);