<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<center>
    <h3>藏经阁详情页</h3>
    <div style="width: 500px; height: 300px; border: 3px solid black">
        @foreach($data as $key=>$val)
            <p>
                小说名称:{{$val->title}} &nbsp;&nbsp;&nbsp;&nbsp;
                小说作者:{{$val->author}}&nbsp;&nbsp;&nbsp;&nbsp;
                小说字数:{{$val->count}}
            </p>
            <hr>
            <p>
                {{$val->content}}
            </p>
        @endforeach
            <br>
    </div>
        
</center>
</body>
</html>
