<?php

$html = <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Survey</title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
  $( "#date2" ).datepicker();
} );
</script>

</head>

<body>
<h1>問卷調查</h1>
<p>請輸入日期</p>
<p>此處針對 Datepicker 的特效示範</p>

<form method="post" action="date_show.php">

  <p>日期輸入(1)：<input type="date" name="date1"></p>

  <p>日期輸入(2)：<input type="text" name="date2" id="date2"></p>
  
  <p><input type="submit" value="送出"></p>

</form>

</body>
</html>
HEREDOC;

echo $html;
?>