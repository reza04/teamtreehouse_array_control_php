<?php 

include "data_siswa.php";

//filter array

$temp_arr=array();
$filter_kota = "";
$filter_lulus= true;
foreach($data_siswa as $value)
{
    if($value[1]==$filter_kota || $filter_lulus)
    {
        if($value[3])
        {
            $lulus ="Belum lulus";
        }else{
            $lulus ="Lulus";
        }
        $temp_arr[]=[$value[0],$value[1],$lulus."<br>"];
    }
}

asort($temp_arr);
print_r($temp_arr);


