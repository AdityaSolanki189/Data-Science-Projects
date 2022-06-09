<?php
  function fact($n){
    if($n <= 1){
      return 1;   
    }
    else{
      return $n * fact($n - 1);
    }
  }
    
  $n = 5; 
  $f = fact($n); 
  echo "Factorial of $n is $f"; 
?>