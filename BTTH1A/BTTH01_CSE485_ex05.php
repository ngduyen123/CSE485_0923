<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

$value1 = $a['b']['o']['b'];
echo "Giá trị = $value1 có key là 'b'<br>";
$value2 = $a['a']['c'];
echo "Giá trị = $value2 có key là 'c'<br>";
$info = $a['a'];
echo "Thông tin của phần tử có key là 'a':<br>";
print_r($info);
?>