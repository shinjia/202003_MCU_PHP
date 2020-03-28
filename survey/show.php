<?php
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$gender   = isset($_POST['gender'])   ? $_POST['gender']   : '';
$blood    = isset($_POST['blood'])    ? $_POST['blood']    : '';
$birth_yy = isset($_POST['birth_yy']) ? $_POST['birth_yy'] : '';
$birth_mm = isset($_POST['birth_mm']) ? $_POST['birth_mm'] : '';
$birth_dd = isset($_POST['birth_dd']) ? $_POST['birth_dd'] : '';
$marriage = isset($_POST['marriage']) ? $_POST['marriage'] : '';
$hobby1   = isset($_POST['hobby1'])   ? $_POST['hobby1']   : '';
$hobby2   = isset($_POST['hobby2'])   ? $_POST['hobby2']   : '';
$hobby3   = isset($_POST['hobby3'])   ? $_POST['hobby3']   : '';
$hobby4   = isset($_POST['hobby4'])   ? $_POST['hobby4']   : '';
$intro    = isset($_POST['intro'])    ? $_POST['intro']    : '';


// extract($_POST);   // 不安全

// 處理姓名的狀況 (單一條件)
$str_nickname = $nickname;
if($nickname=='')
{
    $str_nickname = '無名氏';
}


// 處理性別的輸入 (雙重條件)
if( $gender=='M' )
{
    $str_gender1 = '先生';
    $str_gender2 = '男';
}
elseif( $gender=='F' )
{
    $str_gender1 = '小姐';
    $str_gender2 = '女';
}
else
{
    $str_gender1 = '';
    $str_gender2 = '未指定';
}


// 計算次數
/*
$cnt = 0
if($hobby1=='Y')
{
    // $cnt = $cnt + 1;
    // $cnt++;
    $cnt += 1;
}
else
{
    $cnt += 0;
}
*/

$cnt = 0;
$cnt += ($hobby1=='Y') ? 1 : 0;
$cnt += ($hobby2=='Y') ? 1 : 0;
$cnt += ($hobby3=='Y') ? 1 : 0;
$cnt += ($hobby4=='Y') ? 1 : 0;

$str_hobby = '';  // 顯示的文字
$str_hobby .= ($hobby1=='Y') ? '音樂 ' : ' ';
$str_hobby .= ($hobby2=='Y') ? '閱讀 ' : ' ';
$str_hobby .= ($hobby3=='Y') ? '旅遊 ' : ' ';
$str_hobby .= ($hobby4=='Y') ? '美食 ' : ' ';


// 
$birth = $birth_yy . '/' . $birth_mm . '/' . $birth_dd;
$num_day = (time() - strtotime($birth)) / 86400;


// 密碼不要顯示
$str_password = str_repeat('*', strlen($password) );

$str_intro = nl2br($intro);


// 顯示網頁
$html = <<< HEREDOC
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Survey</title> 
</head> 

<body> 
<h2>{$str_nickname} {$str_gender1} 已收到你的資料如下</h2>

<p>姓名：{$nickname}</p>
<p>密碼：{$str_password}</p>
<p>性別：{$gender}....{$str_gender2}</p>
<p>血型：{$blood}</p>
<p>生日：{$birth_yy} 年 {$birth_mm} 月 {$birth_dd} 日</p>
<p>已婚：{$marriage}</p>
<p>興趣：{$hobby1}, {$hobby2}, {$hobby3}, {$hobby4} ...共勾選了{$cnt}項，分別是 {$str_hobby}</p>
<p>介紹：{$str_intro}</p>

{$birth}----{$num_day}
</body> 
</html> 
HEREDOC;

echo $html; 
?>