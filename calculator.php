<?php
$sum = 0;
foreach($argv as $key => $val)
{ 
    if(is_numeric($val))
      $sum += $val;
    else if(is_string($val) && $key > 1){
      $delimiter = substr($val, 2,1);
      $value = substr($val, 5,strlen($val));
      $array = explode($delimiter, $value);
      foreach ($array as $vals) {
        if($vals < 0){
          echo "Error: Negative numbers not allowed."."\n";
          exit();
        }
        if(is_numeric($vals))
          $sum += $vals;
      }
    }

}

echo $sum."\n";
?>