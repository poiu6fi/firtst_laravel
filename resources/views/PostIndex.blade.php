<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            background-color: aliceblue;
            margin: 20px;
            border: 1px solid black;
        }
        .right-align{
            text-align: right;
            white-space: nowrap;
        }
    </style>
</head>
<body>

    @foreach ($posts as $post)
        <div class=box>
            <p>{{$post->content}}</p>
            <p class = right-align>{{$post->inputer}} {{$post->created_at}}</p>
            <form action="{{route('delete',$post)}}" method="POST">
                @csrf
                    @method('delete')
                        <div class=right-align>
                        <button type="submit">刪除</button>
                        </div>
            </form>
            <div class='right-align'>
                <a href="{{route('edit',$post)}}">編輯</a> 
            </div>
        </div>
    @endforeach

    <a href="{{route('create')}}">新增文章</a>
    
    
</body>
</html>