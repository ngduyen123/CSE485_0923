<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
    ];
$firstElement = reset($numbers);
$lastElement = end($numbers);

echo "Phần tử đầu tiên: " . $firstElement . "\n";
echo "Phần tử cuối cùng: " . $lastElement . "\n";
$minValue = min($numbers);
$maxValue = max($numbers);
$sum = array_sum($numbers);

echo "Số nhỏ nhất: " . $minValue . "\n";
echo "Số lớn nhất: " . $maxValue . "\n";
echo "Tổng giá trị: " . $sum . "\n";
asort($numbers);
echo "Mảng sắp xếp tăng dần theo giá trị: \n";
print_r($numbers);
arsort($numbers);
echo "Mảng sắp xếp giảm dần theo giá trị: \n";
print_r($numbers);
ksort($numbers);
echo "Mảng sắp xếp tăng dần theo khóa: \n";
print_r($numbers);
krsort($numbers);
echo "Mảng sắp xếp giảm dần theo khóa: \n";
print_r($numbers);
?>