<?php
function convertToLowercase($arr) {
    return array_map('strtolower', $arr);
  }
  
  $arrs = ['1', 'B', 'C', 'E'];
  $result = convertToLowercase($arrs);
  print_r($result);
  
?>