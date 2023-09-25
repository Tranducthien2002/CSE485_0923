<?php
$array1 = [
    [77, 87],
    [23, 45]
];

$array2 = [
    'giá trị 1',
    'giá trị 2'
];

$result = array();

$count = min(count($array1), count($array2));

for ($i = 0; $i < $count; $i++) {
    $result[] = [$array2[$i], ...$array1[$i]];
}

print_r($result);
?>