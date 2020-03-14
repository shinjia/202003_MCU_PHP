<?php

$name = '陳信嘉';
$birth = '1988/5/6';
$age = date('Y', time())-date('Y',strtotime($birth)) + 1;  // 計算年齡
$photo = 'images/head1.jpg';
$num = mt_rand(1, 12);
$pic = 'images/pic' . $num . '.png';
$today = date('Y-m-d', time());


/*
$name = '阮經天';
$age = 25;
$photo = 'images/head2.jpg';
*/

$html = <<< HEREDOC

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<p><a href="../list.html">Back to home</a></p>
<h1>Hello World</h1>
<p>今天是 {$today}</p>
<p>姓名：{$name}</p>
<p>生日：{$birth}</p>
<p>年齡：{$age}</p>
<p><img src="{$photo}"></p>
<p>幸福數字：{$num}</p>
<p>猜猜猜你的職業：<img src="{$pic}"></p>

</body>
</html>

HEREDOC;

echo $html;
?>