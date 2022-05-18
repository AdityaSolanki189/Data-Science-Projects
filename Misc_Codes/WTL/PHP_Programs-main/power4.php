<?php
function is_Power_of_four($n)
{
      $x = $n;
      while ($x % 4 == 0) {
      $x /= 4;
     }
       
	if($x == 1)
    {
		return "$n is power of 4";
    }
    else
    {
		return "$n is not power of 4";
    }
  
}
print_r(is_Power_of_four(4)."\n");
print_r(is_Power_of_four(36)."\n");
print_r(is_Power_of_four(16)."\n");
?>