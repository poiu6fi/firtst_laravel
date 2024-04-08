<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1> 文章>更新文章</h1>
    <form action="{{route('update',$post)}}" method="POST">
        <div>
            @csrf
            @method('patch')
            <label for="">內文</label>
            <textarea name="content">
                {{$post->content}}
            </textarea>
            <br></br>
            <button type="submit">更新文章</button>
        </div>

</body>
</html>