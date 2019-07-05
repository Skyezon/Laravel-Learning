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
                    <th>Nama Bioskop</th>
                    <th>Lokasi Bioskop</th>
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
                    <td><img src="{{asset('storage/'.$ngetes->image)}}" width="100px" height="100px"></td>
                    <td>{{$ngetes->bioskop->nama}} </td>
                    <td>{{$ngetes->bioskop->lokasi}} </td>
                    <td>
                    <form action="{{route('movie.delete',$ngetes->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>                                                
                    </form>

                    </td>
                    <td>
                    {{-- <button class="btn btn-success" >edit</button>                     --}}
                    <a class="btn btn-success" href="{{route('movie.edit',$ngetes->id)}}">Update</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
        {{$movies->links()}}
    </div>
</body>

</html>
