<?php

$link = mysqli_connect('localhost', 'root', '', 'class');
$sqlstr = "INSERT INTO person(usercode, username, address, birthday, height, weight, remark) VALUES ('P023', 'xxxCandy','台北','1983-4-3', 180, 78, 'ok')";
mysqli_query($link, $sqlstr);

mysqli_close($link);

echo 'ok';
?>