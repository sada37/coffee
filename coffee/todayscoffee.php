<?php


$name = htmlspecialchars($_POST['name']);
$taste = htmlspecialchars($_POST['taste']);
$feeling = htmlspecialchars($_POST['feeling']);



// 浅め、疲れてる→コールドブリュー
$cold = 'コールドブリューコーヒー';
// 浅め、爽快→スペシャルティコーヒー
$spe = 'スペシャルティコーヒー';
// バランス、疲れてる→フレンチプレス
$fr = 'フレンチプレス';
// バランス、爽快→ドリップコーヒー
$dri = 'ドリップコーヒー';
// 深め、疲れてる→ネルドリップ
$nel = 'ネルドリップ';
// 深め、爽快→サイフォン
$sai = 'サイフォンコーヒー';
$text = '';
$whatCoffee = '';
if($taste === 'sour' && $feeling === 'tired'){
  $text = '水に長時間漬けて抽出する'.$cold.'で軽めに飲んでみよう';
  $whatCoffee = $cold;
} else if($taste === 'sour' && $feeling === 'refresh'){
  $text = '豆にこだわって浅煎りの'.$spe.'にチャレンジしてみよう';
  $whatCoffee = $spe;
} else if ($taste === 'balance' && $feeling === 'tired'){
  $text = '簡単にコーヒーが作れる'.$fr.'でさくっと本格コーヒーを楽しもう';
  $whatCoffee = $fr;
} else if ($taste === 'balance' && $feeling === 'refresh'){
  $text = 'たまには'.$dri.'でゆっくり時間をかけていれてみては？';
  $whatCoffee = $dri;
} else if ($taste === 'bitter' && $feeling === 'tired'){
  $text = '職人技の'.$nel.'でコクのあるコーヒーがおすすめです';
  $whatCoffee = $nel;
} else if ($taste === 'bitter' && $feeling === 'refresh'){
  $text = $sai.'でコクのある味わい深いコーヒーをどうぞ';
  $whatCoffee = $sai;
} 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todayscoffee</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="inner">
    <h1><?= $name ?>さんの今日のコーヒーは<span><?= $whatCoffee ?></span></h1>
    <div class="coffee-image"><img class="coffee-img" src="images/<?= $taste.'&'.$feeling ?>.jpg" alt=""></div>
    <p><?= $text ?></p>
    <a class="back-button" href="index.html">戻る</a>
  </div>
</body>
</html>