<?php

$date1 = isset($_POST['date1']) ? $_POST['date1'] : '';
$date2 = isset($_POST['date2']) ? $_POST['date2'] : '';

// 顯示網頁
$html = <<< HEREDOC
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Survey</title> 
</head> 

<body> 

<p>date1：{$date1}</p>
<p>date2：{$date2}</p>

</body> 
</html> 
HEREDOC;

echo $html; 
?>