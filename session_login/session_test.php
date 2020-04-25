<?php
session_start();

$ss_id = session_id();

$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Test</title>
</head>
<body>
<p>Session id: {$ss_id}</p>
<p><a href="session_test.php" target="_blank">session_test.php (超連結)</a></p>
<p><button onclick="window.open('session_test.php')">session_test.php (新視窗)</p>
</body>
</html>
HEREDOC;

echo $html;
?>