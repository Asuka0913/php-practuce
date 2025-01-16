<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++) {
  if($i % 4 === 0 && $i % 5 === 0) {
      echo "tic-tac\n";
  }elseif ($i % 4 === 0) {
      echo "tic\n";
  }elseif ($i % 5 === 0) {
      echo "tac\n";
  }else {
      echo "$i\n";
  }
};

// Q2 多次元連想配列
// 問題1
echo "{$personalInfos[1]['name']}の電話番号は{$personalInfos[1]['tel']}です。";

// 問題2
$count = 1;

foreach ($personalInfos as $info) {
    echo "{$count}番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
};

// 問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => &$info) {
    $info['age'] = $ageList[$index];
}
unset($info);

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$numaguchi = new Student(18, '沼口');

echo "学籍番号{$numaguchi->studentId}番の生徒は{$numaguchi->studentName}です。";

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問題1
$today = new DateTime();
echo $today->format('Y-m-d');

// 問題2
$date = new DateTime('1992-04-25');
$interval = $today->diff($date);
echo 'あの日から' . $interval->days . '日経過しました。';
?>