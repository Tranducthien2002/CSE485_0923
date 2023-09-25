<?php
function convertToLowercase($array){
    return array_map('strtolower', $array);
}
$arr1=['a','b','ABC'];
$arr2=['1','B','C','E'];
$arr3=['a',0,null,false];

$result1=convertToLowercase($arr1);
$result2=convertToLowercase($arr2);
$result3=convertToLowercase($arr3);

echo"Kết quả sau khi chuyển thành ký tự thường:<br>";
echo"Mảng 1: ";print_r($result1)."<br>";
echo"Mảng 2: ";print_r($result2)."<br>";
echo"Mảng 3: ";print_r($result3)."<br>";
?>