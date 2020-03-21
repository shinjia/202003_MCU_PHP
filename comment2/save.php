<?php
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$fruit1  = isset($_POST['fruit1'])  ? $_POST['fruit1']  : '';
$fruit2  = isset($_POST['fruit2'])  ? $_POST['fruit2']  : '';
$fruit3  = isset($_POST['fruit3'])  ? $_POST['fruit3']  : '';
$fruit4  = isset($_POST['fruit4'])  ? $_POST['fruit4']  : '';


// 若包含中文要轉成 big5，新版使用 mb_convert_encoding() 函式 (舊的使用 iconv())
$s_nickname = $nickname;
$s_nickname = str_replace(",", "，", $s_nickname);   // 避免逗號出現
$s_nickname = mb_convert_encoding($s_nickname, 'big5', 'UTF-8');  // UTF-8 轉成 big5

$data = <<< HEREDOC
{$s_nickname},{$fruit1},{$fruit2},{$fruit3},{$fruit4}

HEREDOC;


$filename = 'data.csv';  // 直接存成 .csv 檔案 (文字檔)

// 存檔 (方法一)
file_put_contents($filename, $data, FILE_APPEND);



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<p>謝謝，已經收到您的意見!!!</p>
<hr />


</body>
</html>
HEREDOC;

echo $html;
?>