//PHP/04　関数を理解しよう
//課題１
<?php
function double($bai) {
    return $bai * 2;
}
echo double(11);
echo "\n";
?>
//課題２
<?php
function f($a, $b){
    return $a + $b;
}
echo f(3,5);
echo "\n";
?>
//課題３
<?php
function kakeru($arr) {
    $result =1;
    foreach($arr as $ar){
        $result *= $ar;
    }
    echo $result;
}
kakeru(array(1, 3, 5, 7, 9));
echo "\n";
?>
//課題４
<?php
 function max_array($arr){
     
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }
 return $max_number;
 }
echo max_array(array(1, 7, 8, 4, 3));
echo "\n";
?>
//課題５
//使ってみるその１:strip_tags
<?php
$text = '<p>test.</p><!-- テスト --><a href="fragment">other text</a>';
echo $text;
echo "\n";
echo strip_tags($text);
echo "\n";
echo strip_tags($text,'<p><a>');
echo "\n";
?>
//使ってみるその２:array_push
<?php
$stack = array("りんご","みかん");
array_push($stack,"ぶどう","バナナ");
print_r($stack);
?>
//使ってみるその３：array_merge
<?php
$color1 = array("red", "blue", "yellow");
$color2 = array("green", "black", "white");
$color3 = array("purple", "brown", "pink");
$color11 = array_merge($color1, $color3);
$color12 = array_merge($color2,$color3);
print_r($color11);
print_r($color12);
?>
//使ってみるその４：teme,mktime
<?php
$date = time();
echo $date;
echo "\n";
//メモ(時,分,秒,月,日,年)
$timestamp = mktime(0, 0, 0, 10, 13, 2019);
echo $timestamp;
echo "\n";
?>
//使ってみるその５:date
<?php
$date1 = date('y/m/d');
echo $date1;
echo "\n";
echo date("Y/m/d H:i:s",strtotime('+9hour'));
echo "\n";
?>
