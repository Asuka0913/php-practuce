<?php
// Q1 変数と文字列

$lastName = '沼口';
$lastMes = '私の名前は「' . $lastName . '」です。';
echo $lastMes;

// Q2 四則演算

$x = 5;
$y = 4;
$num = $x * $y;
echo $num;

$num = $num / 2;
echo $num;

// Q3 日付操作

$today = date("Y年m月d日 H時i分s秒");
$todayMes = '現在時刻は、' . $today . 'です。';
echo $todayMes;

// Q4 条件分岐-1 if文

$device = "windows";

if ($device === "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device === "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
};

// Q5 条件分岐-2 三項演算子

$age = 22;
$message = ($age>18) ? '成人です。' : '未成年です。';
echo($message);

// Q6 配列

$prefecture = ['茨城県', '千葉県', '東京都', '埼玉県', '群馬県', '栃木県', '神奈川県'];
echo $prefecture[2] . 'と' . $prefecture[3] . 'は関東地方の都道府県です。';


// Q7 連想配列-1

$city = ['東京都' => '新宿区', '神奈川県' => '横浜市',
'千葉県' => '千葉市', '埼玉県' => 'さいたま市',
'栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
foreach ($city as $value) {
    echo $value;
    echo "\n";
};

// Q8 連想配列-2

if (array_key_exists("埼玉県", $city)) {
    echo "埼玉県の県庁所在地は、" . $city["埼玉県"] . "です。";
};

// Q9 連想配列-3

$city['大分県'] = '大分市';
$city['大阪府'] = '大阪市';

$kanto_city = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];

foreach ($city as $city_key => $city_value) {
    if(in_array($city_key, $kanto_city)) {
        echo "{$city_key}の県庁所在地は、{$city_value}です。\n";
    } else {
        echo "{$city_key}は関東地方ではありません。\n";
    }
};

// Q10 関数-1

function seyHello($name) {
    echo "{$name}さん、こんにちは。\n";
}
seyHello('甲斐田');
seyHello('長尾');

// Q11 関数-2

function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.1;
    return $taxInPrice;
  };
  
  $price = 1000;
  
  $taxInPrice = calcTaxInPrice($price);
  echo $price . '円の商品の税込み価格は' . $taxInPrice . 'です。';

// Q12 関数とif文

function distinguishNum($number) {
    if($number % 2 === 1) {
        echo "{$number}は奇数です。\n";
    } else {
        echo "{$number}は偶数です。\n";
    }
}
distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文

function evaluateGrade($grades) {
    switch ($grades) {
        case 'A':
        case 'B':
            echo "合格です。\n";
            break;
        
        case 'C':
            echo "合格ですが追加課題があります。\n";
            break;
        
        case 'D':
            echo "不合格です。\n";
            break;
            
        default:
            echo "判定不能です。講師に問い合わせてください。\n";
            break;
    }
}
evaluateGrade('A');
evaluateGrade('K');

?>