<?php  

function br()
{
    echo PHP_EOL;
}

// $score=49;

// if($score>60)
// {
//     echo "You past the tes";  //jika nilai score lebih dari 60 akan keluar seperti disamping

// }elseif($score>=50 && $score<60)
// {
//     echo "Try Again";
// }else
// {
//     echo "You fail the tes";
// }


// $nomor=readline("masukkan nomor :");

// function grade()
// {
//     global $nomor;
//     if($nomor>=95 && $nomor<=100)
//     {
//         echo "A";
//     }elseif($nomor>=75 && $nomor<65)
//     {
//         echo "B";
//     }elseif($nomor>=65 && $nomor<75)
//     {
//         echo "C";
//     }elseif($nomor<65)
//     {
//         echo "D";
//     }else
//     {
//         echo "Nomor yang anda masukkan terlalu banyak";
//     }
// }

// grade();

// //compare

// var_dump((1<>2)); //true
// var_dump((1!=2)); //true

// //identical

// var_dump((1=="1")); //false

// //not idencial

// var_dump((1!=="1")); //false


$number=readline("masukkan nomor :");

// $number=10;

if($number>=10 && $number<=1000)
{
    global $number;
   echo "Your number is in range";
}else
{
    echo "Your number is Not in range";
}


var_dump(($sumber=true) || (false && true));

b();

switch(date('1'))
{
    case "monday":
        echo "Monday";
        break;
    case "Tuesday":
        echo "Wash a car";
    break;
    case "Wednesday":
        echo  "Holiday";
    break;
    case "Thursday":
        echo  "Vacation";
    break;
    case "Friday":
        echo  "day off";
    break;
    case "Saturday":
        echo  "Free day";
    break;
    default:
        echo "Long Holiday";
}


// $firstName = 'Alena';
// $lastName = 'Holigan';
// $currentGrade = 9;
// $finalAverage = 0;
// $messageBody = '';

// if(!$firstName || $lastName)
// {
//     echo "please enter student name";
// }elseif($currentGrade<9 || $currentGrade>12)
// {
//     echo "This is only for high school student,please enter";
// }





?>