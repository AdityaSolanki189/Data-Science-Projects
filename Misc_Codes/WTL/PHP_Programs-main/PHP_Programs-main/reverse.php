<?php
function reverse($number)
{
    $rnum = 0;
    while ($number > 0)
      {
        $rnum = $rnum * 10;
        $rnum = $rnum + $number % 10;
        $number = (int)($number/10);
      }
     return $rnum;
}   
print_r(reverse(1234)."\n");
?>