<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/user/store" method="post">
    {{ csrf_field() }}
    姓名<input name="name" type="text">
    年龄<input name="age" type="text">
    <label><input name="sex" type="radio" value="1" />男 </label>
    <label><input name="sex" type="radio" value="2" />女 </label>
    <input type="submit">tijiao
</form>
</body>
</html>