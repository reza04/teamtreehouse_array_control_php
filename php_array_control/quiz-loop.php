<?php
$facts = array(
    57 => "on Heinz ketchup bottle",
    2 => "is the approximate hours a",
    18 => "is the average hours a python sleeps per day",
    10 => "per of the world",
    11 => "Empire state Buildings",
    98 => "% of the atoms",
    69 => "is the legest number",
);

for($i=0;$i<=100;$i++)
{
    // echo $i.PHP_EOL;
    if(isset($facts[$i]))
    {
        echo "$i ";
        echo "$facts[$i] \n";
    }else
    {
        echo "$i \n";
    }
}


// $nama="Reza Aditya";

// var_dump(isset($nama));