<?php
echo " hello";
print_r($_POST);
if(isset($_POST["submit"]))
{ 
    $inputx=$_POST["inputX"];
    $inputy=$_POST["inputY"];
    $op=$_POST["operation"];
     $result=calc($inputx,$inputy,$op);
     header("location: calculator.php?result=$result");
 
}
else
{
    header("location: handle-calculate.php");
}
function calc(int|float $x ,int|float $y ,string $op):int|float
{
  switch ($op) {
      case 'sum':
          return $x+$y;
          break;
      case 'sub':
            return $x-$y;
            break;
       case 'multiple':
                return $x*$y;
                break;

      default:
          return $x/$y;
          break;
  }

}