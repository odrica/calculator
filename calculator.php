<?php

$sum = 0;
foreach($argv as $key => $value)
{ 
    if($key > 0 && is_numeric($value))
      $sum += $value;
    else if(is_string($value)){
      $array = preg_split('/[\n,]*/', $value);
      foreach ($array as $val) {
        if(is_numeric($val))
          $sum += $val;
      }
    }

}

echo $sum."\n";
?>