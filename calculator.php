<?php
$multi = 1;
foreach($argv as $key => $value)
{
    if($key  == 1 && $value != 'multiply'){
      echo "Command '".$value. "' incorrect!!"."\n";
      exit();
    }
    if($key > 1 && is_numeric($value))
      $multi *= $value;
    else if(is_string($value) && $key > 1){
      $array = explode(',', $value);
      foreach ($array as $k => $val) {
        if($val < 1000 && is_numeric($val))
          $multi *= $val;
      }
    }

}

if(!isset($argv[2]))
  $multi = 0;

echo $multi."\n";
?>