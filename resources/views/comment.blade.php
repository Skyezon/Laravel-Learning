<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="container">
        @foreach ($comments as $item)
        <span>Title : {{$item->title}}</span>    
        <span>Comment : {{$item->isi}}</span>    
        <span>Likes : {{$item->angka}}</span>    
        <br>
        <br>
        @endforeach
    {{$comments->links()}}
    </div>
    <form class="form-ngetes" action="{{route('post.add')}}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Enter Title">
            <input type="text" name="comment" placeholder="Enter komen">
            <input type="text" name="like" placeholder="Enter like">
            <input type="submit" value="Submit" class="btn">
        </form>
    <div>
</body>

</html>
