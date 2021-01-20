<?php 


$test = "testです";

$test_1 = "123";
$test_2 = "456";

$test_3 = $test_1 . $test_2;

var_dump($test_3);

$array_2 = [
  ['赤' , '黄', '青'], 
  ['緑' , '青', '黒'],
];

// echo $array[0];

echo ('<pre>');
var_dump($array_2[1][2]);
echo ('</pre>');
echo $array_2[1][2], $array_2[1][1];

$array_member = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー',
];
echo '<br>';
echo $array_member ['name'];


echo ('<pre>');
var_dump($array_member);
echo ('</pre>');


echo '<br>';
echo $array_member ['name'];

$array_member_3 = [
  'A組' => [
    '本田' => [
      '身長' => 170,
      '体重' => 65
    ],
    '乾' => [
      '身長' => 155,
      '体重' => 55
    ]
  ],
  'B組' => [
    '香川' => [
      '身長' => 165,
      '体重' => 65
    ],
    '長友' => [
      '身長' => 160,
      '体重' => 60
    ]
  ]
];

echo ('<pre>');
var_dump ($array_member_3['A組']);
echo ('</pre>');

echo $array_member_3 ['A組']['乾']['身長'];

$height = '91';

echo '<br>';
if ($height !== 91) {
  echo '身長は' . $height . 'cmです';
}

echo '<br>';
$signal = 'green';

if ($signal === 'red') {
  echo '止まれ';
} else if ($signal === 'yellow') {
  echo '一旦停止';
} else {
  echo '進め';
}

echo '<br>';
$test = 'r';

if(!empty($test)){
  echo '変数は空です';
}

echo '<br>';
$signal_1 = 'red';
$signal_2 = 'yellow';
if($signal_1 === 'red' || $signal_2 === 'blue') {
  echo '赤と青です';
}

echo '<br>';
$math = 80;
$comment = $math >= 80 ? 'good' : 'not good';

echo $comment;

echo '<br>';
$members = [
  '本田' => [
    '身長' => 166,
    '体重' => 70
  ],
  '香川' => [
    '身長' => 164,
    '体重' => 66
  ]
];
// echo '<br>';
foreach ($members as $member) {
  foreach ($member as $key => $value) {
    echo $key, $value;
  };
}
echo '<br>';
foreach ($members as $key => $value) {
  echo $key, $value ;
}

echo '<br>';
// for (条件) {
//   処理
// };

for ($i = 0; $i < 10; $i++ ) {
  if ($i === 5) {
    // break;
    continue;
  }
  if ($i === 8) {
    // break;
    continue;
  }
  echo $i;
};

echo '<br>';
$j = 0;
while($j < 5){
  echo $j;
  $j++;
}

echo '<br>';
$switch = 1;
switch ($switch) {
  case 1:
    echo '1です';
    break;
  case 2:
    echo '2です';
    break;
  case 3:
    echo '3です';
    break;
  default:
    echo '4です';
}

echo '<br>';
if ($switch === 1) {
  echo '1です';
}
if ($switch === 2) {
  echo '1です';
}
if ($switch === 3) {
  echo '1です';
}

echo '<br>';
$comment2 = 'コメント2';

function getComment ($string) {
  // 処理
  echo $string;
}

getComment($comment2);

echo '<br>';

function getNumberOfComment($comment5) {
  return 5;
}

$number = getNumberOfComment('コメント5');
echo $number;

echo '<br>';
$text = 'アイウエオ';
echo strlen($text);

echo '<br>';
$str = '文字列を置換します';
echo str_replace('置換', 'ちかん', $str);

$str_5 = 'エンジニアを、目指します';
echo '<pre>';
var_dump (explode('、', $str_5));
echo '</pre>';

$array_3 = ['みかん', 'りんご'];
array_push($array_3, 'バナナ');
var_dump($array_3);

echo '<br>';
$globalValiable = 'グローバル変数です';
function checkScope ($str) {
  $localValiable = 'ローカル変数です';
  echo $str;
};

checkScope ($globalValiable);

?>