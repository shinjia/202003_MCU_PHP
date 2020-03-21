<?php
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$comment  = isset($_POST['comment'])  ? $_POST['comment']  : '';


$today = date('Y-m-d H:i:s', time());  // 現在時間
;
$data = <<< HEREDOC
時間：{$today}
姓名：{$nickname}
意見：{$comment}
----------------------------------

HEREDOC;

$filename = 'data.txt';

// 存檔 (方法一)
file_put_contents($filename, $data, FILE_APPEND);


/* 使用 IFTTT 通知到 LINE */

// send IFTTT (PHP Curl-->IFTT--->webhood-->LINE)
$event = 'FireToLINE';
$key = 'c5KMehf3GhMv7WdSSQa8SE';
$ext = '?value1=' . $nickname;

$url = 'https://maker.ifttt.com/trigger/' . $event . '/with/key/' . $key . $ext;

//
 
$ch = curl_init();
 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
 
curl_close($ch);


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