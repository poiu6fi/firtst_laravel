<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>

    <h1> 文章>新增文章</h1>

    <form action="{{route('store')}}" method="POST">
        <div>
            @csrf
            <label for="">內文</label>
            <textarea name="content" dir="ltr">
            </textarea>
            <br></br>
            <button type="submit">新增文章</button>
        </div>

    </form>

</body>
</html>