<?php
declare(strict_types=1);

$arr = [1,2,3];

list($a, $b, $c) = $arr;
//var_dump($a, $b, $c);

$userData = ['name' => 'Hidran', 'lastName' => 'arias'];
list('name'=> $name, 'lastName'=>$lastName) = $userData;
//var_dump($name, $lastName);


[$a, $b, $c ] = $arr;

//var_dump($a, $b, $c);

['name'=> $name, 'lastName'=>$lastName] = $userData;

//var_dump($name, $lastName);


$userData = [
    ['name' => 'Hidran', 'lastName' => 'arias'],
    ['name' => 'Hidran2', 'lastName' => 'arias2'],
    ];



    foreach ($userData as ['name'=> $name, 'lastName'=>$lastName]){
        echo "$name, $lastName\n";
    }















