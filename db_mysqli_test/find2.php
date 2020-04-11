<?php


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>
<body>
<h1>查詢</h1>

<form method="post" action="find2_x.php">
<p>姓名 (內含文字)：<input type="text" name="key"></p>
<p><input type="submit" value="查詢"></p>

</form>

</body>
</html>
HEREDOC;

echo $html;
?>