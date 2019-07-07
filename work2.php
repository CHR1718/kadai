<?php
$name = "山田　地浩";
// もし $name が 山田 地浩 なら、 ifのあとの { } の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される

if ($name == "山田　地浩") {
  echo "私は あなたの名前 です。";
} else {
  echo "あなたの名前ではありません。";
}

//= "私は あなたの名前 です。" が表示される。

$total = 0;
echo $total,"\n";
//=> 0 と表示される。

// $iが0から始まり、$iが10000以下の間繰り返し処理を行う。
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total,"\n";
//=> 50005000 と表示される。

$fruit = array("apple", "grape", "melon" , "banana", "peach");
// $animals から一つずつ要素を取り出して、$animal に代入される

foreach($fruit as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}

//=> 要素はapple
//=> 要素はgrape
//=> 要素はmelon
//=> 要素はbanana
//=> 要素はpeach
//=> と表示される

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}