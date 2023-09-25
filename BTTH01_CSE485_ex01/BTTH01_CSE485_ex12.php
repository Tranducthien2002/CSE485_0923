<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và cuối cùng trong mảng
$firstElement = reset($numbers);
$lastElement = end($numbers);

echo "Phần tử đầu tiên: $firstElement<br>";
echo "Phần tử cuối cùng: $lastElement<br>";

// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị từ mảng
$maxNumber = max($numbers);
$minNumber = min($numbers);
$sum = array_sum($numbers);

echo "Số lớn nhất: $maxNumber<br>";
echo "Số nhỏ nhất: $minNumber<br>";
echo "Tổng các giá trị: $sum<br>";

// Sắp xếp mảng theo chiều tăng và giảm các giá trị
asort($numbers);
$ascendingSorted = $numbers;
arsort($numbers);
$descendingSorted = $numbers;

echo "Sắp xếp mảng theo chiều tăng: ";
print_r($ascendingSorted);
echo "Sắp xếp mảng theo chiều giảm: ";
print_r($descendingSorted);

// Sắp xếp mảng theo chiều tăng và giảm các key
ksort($numbers);
$ascendingKeySorted = $numbers;
krsort($numbers);
$descendingKeySorted = $numbers;

echo "Sắp xếp mảng theo chiều tăng key: ";
print_r($ascendingKeySorted);
echo "Sắp xếp mảng theo chiều giảm key: ";
print_r($descendingKeySorted);


?>