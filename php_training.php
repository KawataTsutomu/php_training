<?php
print("#####q1#####" . PHP_EOL);
// 配列の最後に"斎藤"を追加し出力
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載
$names[] = "斎藤";
print_r($names);

echo PHP_EOL;
?>

<?php
print("#####q2#####" . PHP_EOL);
// 次の二つの配列を合体させた新しい配列 $array を作成し出力
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

# 以下に回答を記載
$array = array_merge($array1, $array2);

print_r($array);
echo PHP_EOL;
?>

<?php
print("#####q3#####" . PHP_EOL);
// 配列の中に 3 がいくつあるかを出力するコードを書き出力
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];

# 以下に回答を記載
$count = 0;
foreach ($numbers as $number) {
    if ($number === 3) {
        $count++;
    }
}

print_r($count . "回" . PHP_EOL);
echo PHP_EOL;
?>

<?php
print("#####q4#####" . PHP_EOL);
// 配列から null の要素を削除し出力(新しい配列は作らない)
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

# 以下に回答を記載
$sports = array_diff($sports, [null]);
print_r($sports);
echo PHP_EOL;
?>

<?php
print("#####q5#####" . PHP_EOL);
// 配列が空であれば true，1つ以上の要素があれば false を出力するコード
$array1 = [];
$array2 = [1, 5, 8, 10];

# 以下に回答を記載
if (empty($array1)) {
    echo "true" . PHP_EOL;
} else {
    echo "false" . PHP_EOL;
}

if (empty($array2)) {
    echo "true" . PHP_EOL;
} else {
    echo "false" . PHP_EOL;
}
echo PHP_EOL;
?>

<?php
print("#####q6#####" . PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

# 以下に回答を記載
$numbers2 = [];
foreach ($numbers1 as $number) {
    $numbers2[] = $number * 10;
}

print_r($numbers2);
echo PHP_EOL;
?>

<?php
print("#####q7#####" . PHP_EOL);
// 配列の要素を 文字列 から 数字 に変換し出力
$array = ["1", "2", "3", "4", "5"];

# 以下に回答を記載
$array = array_map('intval', $array);

# 以下は変更しないで下さい
var_dump($array);
echo PHP_EOL;
?>

<?php
print("#####q8#####" . PHP_EOL);
$programming_languages = ["php", "ruby", "python", "javascript"];

# 以下に回答を記載
$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);

# 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;
?>

<?php
print("#####q9#####" . PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

# 以下に回答を記載
$names2 = [];
foreach ($names as $key => $name) {
    $number = $key + 1;
    $name2 = ("会員No." . $number . " " . $name);
    $names2[] = $name2;
}

print_r($names2);
echo PHP_EOL;
?>

<?php
print("#####q10#####" . PHP_EOL);
// うに という文字列が含まれていれば「好物です」と表示し，そうでなければ「まぁまぁ好きです」と出力する
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];

# 以下に回答を記載
foreach ($foods as $food) {
    if (strpos($food, "うに") !== false) {
        //'abcd'のなかに'bc'が含まれている場合
        echo "好物です" . PHP_EOL;
    } else {
        echo "まぁまぁ好きです" . PHP_EOL;
    }
}
echo PHP_EOL;
?>

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

# 以下に回答を記載

echo PHP_EOL;

<?php
print("#####q12#####" . PHP_EOL);
// 次の連想配列から name の値を出力
$data = ["user" => ["name" => "satou", "age" => 33]];

# 以下に回答を記載
print_r($data["user"]["name"]);
echo PHP_EOL;
?>

<?php
print("#####q13#####" . PHP_EOL);
// $user_data に，$update_data の内容を反映させ，$user_data の内容を書き換え，出力
$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

# 以下に回答を記載
$user_data = array_merge($user_data, $update_data);
print_r($user_data);
echo PHP_EOL;
?>

<?php
print("#####q14#####" . PHP_EOL);
// 次の連想配列から全てのキー（添字）を取り出して、キーが数字である通常の配列（添字配列）を作成し，出力して下さい。
$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

# 以下に回答を記載
print_r(array_values($data));
echo PHP_EOL;
?>

<?php
print("#####q15#####" . PHP_EOL);
// age というキーが含まれている場合は OK ，含まれていない場合は NG という文字列が出力されるコードを書いて下さい。
$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];

# 以下に回答を記載
if (array_key_exists('age', $data1)) {
    echo "OK" . PHP_EOL;
} else {
    echo "NG" . PHP_EOL;
}

if (array_key_exists('age', $data2)) {
    echo "OK" . PHP_EOL;
} else {
    echo "NG" . PHP_EOL;
}

echo PHP_EOL;
?>

<?php
print("#####q16#####" . PHP_EOL);
// 次の配列の各要素について，「私の名前は〜です。年齢は〜歳です。」と表示して下さい。
$users = [
    ["name" => "satou", "age" => 22],
    ["name" => "yamada", "age" => 12],
    ["name" => "takahashi", "age" => 32],
    ["name" => "nakamura", "age" => 41]
];
# 以下に回答を記載
foreach ($users as $user) {
    echo "私の名前は" . $user["name"] . "です。 " .
        "年齢は" . $user["age"] . "歳です。" . PHP_EOL;
}
echo PHP_EOL;
?>

print("#####q17#####".PHP_EOL);
class User
{

# コードを追加

}

$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

# コードを追加

$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
# 以下を修正して下さい

protected $name;

function __construct($book_name){
$this->name = $book_name;
}
}
# 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

# コードを追加

}

class Zoo
{

# コードを追加

}

$zoo = new Zoo("旭山動物園",["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach($humans as $human){
$zoo->info_entry_fee($human);
}

echo PHP_EOL;
