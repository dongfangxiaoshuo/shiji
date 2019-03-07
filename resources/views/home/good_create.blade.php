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
<h2>菜品添加页面</h2>
<form action="/goods" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{--菜名：<input required type="text" value="" name="name" id=""><br><br>--}}
    {{--价格：<input required type="text" value="" name="price" id=""><br><br>--}}
    菜名：<input  type="text" value="" name="name" id=""><br><br>
    价格：<input  type="text" value="" name="price" id=""><br><br>
    照片:<input type="file" name="photo" id="" ><br><br>
    <input type="submit" value="添加">
    <input type="reset" value="重置">
</form>
</body>
</html>