<?php

$iceCream=[
    "age"=> 34,
    true=> "Chocolate",
    "height"=> 1.45,
     1=> "angka satu",
    false => "salah",
    2.5 => "benar",

];

// print_r($iceCream);

$task=array(
    "title"=>"Clean motorcycle",
    "pripority"=> "<Medium",
    "complate"=> true,
);

$task2=array(
    "title"=> "Wath Movie",
    "Priority"=> "Medium",
    "complate"=> false,
);

$task3="All tasl was done";

$todo=array($task,$task2,$task3);

echo $todo[0]["title"];

echo PHP_EOL;

echo $todo[2];

//short array bracket yang []
