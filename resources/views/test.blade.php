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
    <h2>请登录</h2>
    <form action="/test" method="post">
        {{--这里是防止跨站请求伪造的令牌验证--}}
        {{csrf_field()}}
        账号：<input type="text" name="username" id=""><br><br>
        密码：<input type="password" name="userpass" id=""><br><br>
        <input type="submit" value="登陆">
        <input type="reset" value="重置">
    </form>
</body>
</html>