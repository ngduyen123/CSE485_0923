<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

function tinhTong($arrs) {
    $tong = array_sum($arrs);
    return $tong;
}

function tinhTich($arrs) {
    $tich = array_product($arrs);
    return $tich;
}

function tinhHieu($arrs) {
    $hieu = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $hieu -= $arrs[$i];
    }
    return $hieu;
}

function tinhThuong($arrs) {
    $thuong = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $thuong /= $arrs[$i];
    }
    return $thuong;
}

$tong = tinhTong($arrs);
$tich = tinhTich($arrs);
$hieu = tinhHieu($arrs);
$thuong = tinhThuong($arrs);

echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $tong . "<br>";
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich . "<br>";
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $hieu . "<br>";
echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $thuong . "<br>";
?>

