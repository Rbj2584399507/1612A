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
<form action="add_do" method="post">
    <center>
        <table>
            <tr>
                <td>小说名称</td>
                <td><input type="text" name="title" class="form-control"></td>
            </tr>
            <tr>
                <td>小说内容</td>
                <td><input type="text" name="content" class="form-control"></td>
            </tr>
            <tr>
                <td>小说作者</td>
                <td><input type="text" name="author" class="form-control"></td>
            </tr>
            <tr>
                <td>小说字数</td>
                <td><input type="text" name="count" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" value="插入数据" class="btn btn-primary"></td>
            </tr>
        </table>
    </center>
</form>

</body>
</html>