<?php

print("#####q1#####" . PHP_EOL);
// 次の配列の最後に "斎藤" を追加し，出力して下さい。
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載
$names[] = "斎藤";
print_r($names);
echo PHP_EOL;

?>

<?php
print("#####q2#####" . PHP_EOL);
// 次の二つの配列を合体させた新しい配列 $array を作成し，出力して下さい。
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

# 以下に回答を記載
$array = array_merge($array1, $array2);

print_r($array);
echo PHP_EOL;
?>

<?php
print("#####q3#####" . PHP_EOL);
// 次の配列の中に 3 がいくつあるかを出力するコードを書き，出力して下さい。
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];

# 以下に回答を記載
$count = 0;
foreach ($numbers as $number) {
    if ($number === 3) {
        $count++;
    }
}

print_r($count . "個" . PHP_EOL);
echo PHP_EOL;
?>

<?php
print("#####q4#####" . PHP_EOL);
// 次の配列から null の要素を削除し，出力して下さい。（新しい配列を作成せずに実現して下さい）
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

# 以下に回答を記載
$sports = array_diff($sports, [null]);
print_r($sports);
echo PHP_EOL;
?>

<?php
print("#####q5#####" . PHP_EOL);
// 配列が空であれば true，1つ以上の要素があれば false を出力するコードを書いて下さい。
$array1 = [];
$array2 = [1, 5, 8, 10];

# 以下に回答を記載
var_export(empty($array1));
echo PHP_EOL;

var_export(empty($array2));
echo PHP_EOL;
?>

<?php
print("#####q6#####" . PHP_EOL);
// 次の配列から，期待された結果の配列 $numbers2 を作成し，出力して下さい。
$numbers1 = [1, 2, 3, 4, 5];

# 以下に回答を記載
$numbers2 = [];
foreach ($numbers1 as $number) {
    $numbers2[] = $number * 10;
}

print_r($numbers2);
echo PHP_EOL;
?>

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

# 以下に回答を記載

# 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php", "ruby", "python", "javascript"];

# 以下に回答を記載

# 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];

# 以下に回答を記載

echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

# 以下に回答を記載

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = ["user" => ["name" => "satou", "age" => 33]];

# 以下に回答を記載

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

# 以下に回答を記載

echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

# 以下に回答を記載

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];

# 以下に回答を記載

echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
["name" => "satou", "age" => 22],
["name" => "yamada", "age" => 12],
["name" => "takahashi", "age" => 32],
["name" => "nakamura", "age" => 41]
];

# 以下に回答を記載

echo PHP_EOL;
