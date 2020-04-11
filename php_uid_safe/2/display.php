<?php

function uid_encode($uid, $key='abc')
{
	return md5($uid.$key);
}

$uid = isset($_GET['uid']) ? $_GET['uid'] : 0;
$chk = isset($_GET['chk']) ? $_GET['chk'] : '';

$a_db = array(
   '0'=>'00000000000000000000', 
   '1'=>'11111111111111111111', 
   '2'=>'22222222222222222222', 
   '3'=>'33333333333333333333', 
   '4'=>'44444444444444444444', 
   '5'=>'55555555555555555555' );

if(uid_encode($uid)==$chk)
{
   // 合法的連結
   $data = $a_db[$uid];
}
else
{
   $data = '不給你看就是不給你看，亂改uid也沒有用';
}


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>無標題文件</title>
</head>

<body>
<p><a href="list.php">回 list.php</a></p>
要顯示的內容如下：
{$data}
</body>
</html>
HEREDOC;

echo $html;
?>