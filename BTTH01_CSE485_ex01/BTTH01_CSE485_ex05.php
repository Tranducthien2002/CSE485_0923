<?php
$a=['a'=>['b'=>0,'c'=>1],'b'=>['e'=>2,'o'=>['b'=>3]]];
$ValueB=$a['b']['o']['b'];
echo"Giá trị có key 'b' là: ".$ValueB;
$ValueC=$a['a']['c'];
echo"Giá trị có key 'b' là: ".$ValueC;
$infoA=$a['a'];
echo"Thông tin của phần từ có key 'a' là: "; print_r($infoA);
?>