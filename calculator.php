<?php

$sum = 0;
foreach($argv as $key => $value)
{
    if($key > 0 && is_numeric($value))
      $sum += $value;
    else if(is_string($value)){
      $array = explode(',', $value);
      foreach ($array as $k => $val) {
        if($val < 1000)
        $sum += $val;
      }
    }

}

echo $sum."\n";
?>