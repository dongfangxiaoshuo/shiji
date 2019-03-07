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
        这里是菜品详情页面
           <table>
               <tr>
                   <td>菜名</td>
                   <td>价格</td>
               </tr>

               <tr>
                   <td>{{$good->name}}</td>
                   <td>{{$good->price}}</td>
               </tr>

           </table>
</body>
</html>