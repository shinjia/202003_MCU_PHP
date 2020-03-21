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

//$filename = 'data.txt';
//$filename = 'data_20200321.txt';
$filename = 'save/data_' . date('Ymd',time()) . '.txt';

// 存檔 (方法一)
// file_put_contents($filename, $data, FILE_APPEND);


// 存檔 (方法二)：新的放前面
if(!file_exists($filename))
{
    file_put_contents($filename, '');
}

$old = file_get_contents($filename);
$new = $data . $old;
file_put_contents($filename, $new);



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