<?php

$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;
//$a = $_GET['a'];
//$b = $_GET['b'];

$ans = $a * $b;

$n1 = $ans % 10;  // 個位數
$n2 = floor($ans / 10);  // 十位數

$n1_pic = '<img src="images/' . $n1 . '.jpg">';
$n2_pic = '<img src="images/' . $n2 . '.jpg">';

// 補充
if( $n2==0 )
{
   $n2_pic = '';
}
else
{
   $n2_pic = '<img src="images/' . $n2 . '.jpg">';
}

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<h1>九九乘法 CAI</h1>
<p>{$a} 乘以 {$b} 等於 {$ans} </p>
<p>{$n2_pic}{$n1_pic}</p>

<p><a href="question.php">下一題</a></p>

</body>
</html>
HEREDOC;

echo $html;
?>