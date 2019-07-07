<?php
// 変数　$a に 3 を代入
$a = 3;

// 変数 $b　に 7 を代入
$b = 7;

// 変数 $a と 変数 $b を足した結果を 変数 $c に代入する。
$c = $a + $b;

// 変数 $c を出力する
echo $c;
echo "\n";
// => 10 と表示される

// 変数 $array_month に [1月, 2月, 3月, 4月, 5月, 6月, 7月, 8月, 9月, 10月, 11月, 12月] を代入
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];

// $array_monthから 8月 を取り出して表示する。
echo $array_month[7];
// => 8月 と表示される

//変数 $hello に Hello, を代入
$hello = "Hello,";

//変数 $name に Chihiro を代入
$name = "Chihiro";

//変数 $world に s World を代入
$world = "s World!";

echo $hello.$name.$world;

// .= は変数に文字列を連結する
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;
//=> tech boost と表示される


$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];
