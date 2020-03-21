<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  
<h1>客戶意見留言</h1>
<form method="post" action="save.php">
  <p>姓名：
    <input type="text" name="nickname" id="nickname" />
  </p>
  <p>
    喜歡的水果
    <input type="checkbox" name="fruit1" value="Y">香蕉
    <input type="checkbox" name="fruit2" value="Y">蘋果
    <input type="checkbox" name="fruit3" value="Y">西瓜
    <input type="checkbox" name="fruit4" value="Y">鳳梨
  </p>
  <p>
    <input type="submit" value="送出" />
  </p>
</form>

</body>
</html>