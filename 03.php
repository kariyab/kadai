<?php
//課題１
$name = "kariya";
if ($name == "kariya") {
    echo "私はあなたの名前です";
} else {
    echo "あなたの名前ではありません";
}
//課題２
$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo "\n";
echo $total;
//課題３
$fruitu = array("柿","ぶどう","りんご","みかん","桃");
foreach($fruitu as $fruitu){
    echo "\n";
    echo "" . $fruitu;
}

//課題４

// for文の始めの値を定義する
$start = 1;
// for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <=$end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo "\n";
    echo $i;
  }
}