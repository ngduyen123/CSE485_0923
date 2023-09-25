<?php
function convertToUppercase($arr) {
    return array_map(function($item) {
      return is_string($item) ? strtoupper($item) : $item;
    }, $arr);
  }
  
  $arrs = ['1', 'b', 'c', 'd'];
  $result = convertToUppercase($arrs);
  print_r($result);
?>