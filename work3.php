<?php
// 引数に数値を指定して実行すると、数値を2倍にして返す関数
function sum($max) {
return $max * 2;
}
// 関数を実行
echo sum(100);
echo "\n";


function f($a, $b){
//処理したい内容
return $a+$b;
}
echo f(1,1),"\n";

$array = array(1,3,5,7,9);
$result=1;
foreach($array as $value){
$result=$result*$value;
//echo $value 
echo "- ", $result,"\n";
}
echo $result,"\n";

function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0]; 
    foreach($arr as $a){
    if($max_number < $a){
    $max_number = $a;        
    }
    }

 return $max_number;
 }
 
echo max_array(array(3,5,7,100,1,2,4,200)),"\n";
 
 
 
 
 
 