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
    <div class="d-flex justify-content-center align-item-center">
        <img src="{{asset('storage/'.$movie->image)}}" alt="">
        {{-- <p>lorem</p> --}}
    </div>
    <div class="description">
        {{-- <h1>lorem</h1> --}}
        <p>{{$movie->sinopsis}}</p>
    </div>
    <div class="comment">
        <h1>comment</h1>
        @foreach($movie->comments as $har)
        <div class="content">
            <p>
                {{$har->isi}}
            </p>
        </div>
        @endforeach
    </div>


</body>

</html>
