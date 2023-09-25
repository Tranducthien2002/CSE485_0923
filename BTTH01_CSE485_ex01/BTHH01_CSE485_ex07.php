<?php $array=[12,5,200,10,125,60,90,345,-123,100,-125,0];
$numbersInRange =array();
foreach($array as $number){
    if($number >= 100 && $number<=200 && $number%5===0){
        $numbersInRange[]=$number;
    }
}
echo"Các số từ 100 đến 200 và chia hết cho 5 trong mảng là:<br>";
foreach($numbersInRange as $number){
    echo $number. "<br>";
}
?>