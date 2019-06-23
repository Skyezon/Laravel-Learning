<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        @if (Session::has('success'))
        <div class="alert alert-success">
            <p>{{Session::get('success')}}</p>
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Sinopsis</th>
                    <th>Director</th>
                    <th>Image</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               @foreach($movies as $ngetes)
               <tr>
                    <td>{{$ngetes->title}}</td>
                    <td>{{$ngetes->sinopsis}}</td>
                    <td>{{$ngetes->director}}</td>
                    <td><img src="{{asset($ngetes->pic)}}" width="100px" height="100px"></td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                    <td>
                    <button class="btn btn-success">edit</button>                    
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
        {{$movies->links()}}
    </div>
</body>

</html>
