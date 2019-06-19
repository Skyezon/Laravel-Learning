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
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               @foreach($posts as $ngetes)
               <tr>
                    <td>{{$ngetes->title}}</td>
                    <td>{{$ngetes->description}}</td>
                    <td>{{$ngetes->author}}</td>
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
        {{$posts->links()}}
    </div>
</body>

</html>
