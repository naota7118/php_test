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

?>