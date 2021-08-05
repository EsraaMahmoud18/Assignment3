<?php
// declare(strict_types=1);
// //shuffle
// $arr=["esraa","engy","marian","hager"];
// function shuffleArray($arr):array
// {
//     $arrayLen=count($arr);
//     $shuffledNo=$arrayLen*3;
//     for ($i=1; $i<= $shuffledNo ; $i++) 
//     {
//          $randIndex1=rand(0,$arrayLen-1);
//          $randIndex2=rand(0,$arrayLen-1);
//          if ($randIndex1!==$randIndex2)
//           {
//              swap($arr[$randIndex1],$arr[$randIndex2]);
//          }
//      }
//      return $arr;
// }

//  function swap(&$var1,&$var2)
//  {
//      $temp=$var1;
//      $var1=$var2;
//      $var2=$temp;
//  }
//   $shuffled=shuffleArray($arr);
//   echo"<pre>";
//   print_r($shuffled);
//   echo"</pre>";
// $x=10;
// function test(int &$num)
// {
//     $num+=10;
// }test($x);
// echo$x;

// function greet(string $name) :string //return type
// {
//     return "hello ya $name <br>";
// }
// $message=greet("esraa");
// echo $message;

// function sum(int $x,int$y):int
// {
//     return $x+$y;
// }
// function calc(int|float $x ,int|float $y ,string $op):int|float
// {
//   switch ($op) {
//       case 'sum':
//           return $x+$y;
//           break;
//       case 'sub':
//             return $x-$y;
//             break;
//        case 'multiple':
//                 return $x*$y;
//                 break;

//       default:
//           return $x/$y;
//           break;
//   }
  
    // if($op=="sum")
    // {
    //     return $x+$y;
    // }    // {
    //     return $x-$y;
    // }
    // elseif($op=="multiple")
    // {
    //     return $x*$y;
    // }
    // else
    // {
    //     return $x/$y;
    // }

// }
  
// echo calc(5,4,"multiple");














?>