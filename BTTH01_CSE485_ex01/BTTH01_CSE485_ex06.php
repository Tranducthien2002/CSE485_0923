<?php
$keys=array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values=array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platyus"
);
$keysAndValues =array();

foreach ($keys as $key => $value){
$fieldKey=$key ."value";

if(isset($values[$fieldKey])){
    $keysAndValues[$value]=$values[$fieldKey];
}}
print_r($keysAndValues);
?>