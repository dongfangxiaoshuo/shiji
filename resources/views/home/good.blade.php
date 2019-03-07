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
        这里是菜品页面
        <a href="./goods/create">去添加</a>
           <table>
               <tr>
                   <td>菜名</td>
                   <td>价格</td>
               </tr>
               @foreach ($goods as $good)
               <tr>
                   <td><a href="/goods/{{$good->id}}">{{$good->name}}</a></td>
                   <td>{{$good->price}}</td>
                   <td><a href="/goods/{{$good->id}}/edit">去修改</a></td>
               </tr>
                @endforeach
           </table>
</body>
</html>