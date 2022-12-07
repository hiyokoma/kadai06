<?php

$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
$mail = $_POST['mail'];


// 変数を用意
$time = date("Y-m-d H:i:s");

// $timeや$nameをファイルに書き込む際、区切り文字として、 /(スラッシュ)を結合しています。
$str = '<table border="1"> <tr> <th>時間</th><th>'. $time . '</th></tr><tr><th>名前</th><th> '  . $name . '</th></tr><tr><th>アドレス</th><th>' .  $mail . '</th></tr><tr><th>出身</th><th> ' . $birthPlace . '</tr> </table>';

// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $str . "\n");
fclose($file);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
