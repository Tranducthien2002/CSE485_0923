<?php
$arrs=[2,5,6,9,2,5,6,12,5];
$lengh =count($arrs);
$H =$arrs[0];
$product=1;
$result=$arrs[0];

foreach($arrs as $key => $value){
    if($key>0){
        $H-=$value;
    }

}
for($i=0;$i<count($arrs);$i++){
    $product*=$arrs[$i];
}
for($i=0;$i<count($arrs);$i++){
    if($arrs[$i]!=0){
        $result /= $arrs[$i];
    }
}
    
echo "Tổng các phần tử  =2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = "  .array_sum($arrs).'<br>';
echo "Tích các phần tử  =2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = "  .$product .'<br>';
echo "Hiệu các phần tử  =2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = "  .$H .'<br>';
echo "Thương các phần tử  =2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = " .$result .'<br>';

?>