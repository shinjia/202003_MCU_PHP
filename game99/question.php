<?php

$a = mt_rand(1, 9);
$b = mt_rand(1, 9);

$pic1 = 'images/' . $a . '.jpg';
$pic2 = 'images/' . $b . '.jpg';

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<h1>九九乘法 CAI</h1>
<p><img src="{$pic1}"><img src="images/mul.jpg"><img src="{$pic2}"></p>
<p>| <a href="question.php">換一題</a> | <a href="answer.php?a={$a}&b={$b}">看答案</a> |</p>
</body>
</html>
HEREDOC;

echo $html;
?>