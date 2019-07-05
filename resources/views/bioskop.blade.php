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
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Film-film</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               @foreach($bioskops as $ngetes)
               <tr>
                    <td>{{$ngetes->nama}}</td>
                   <td>{{$ngetes->lokasi}}</td>
                   <td>
                       @foreach ($ngetes->movie as $movie)
                           {{$movie->name}}
                           <br/>
                       @endforeach
                   </td>
                    <td>
                    <form action="{{route('bioskop.delete',$ngetes->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>                                                
                    </form>

                    </td>
                    <td>
                    {{-- <button class="btn btn-success" >edit</button>                     --}}
                    <a class="btn btn-success" href="{{route('bioskop.edit',$ngetes->id)}}">Update</a>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
        {{$bioskops->links()}}
    </div>
</body>

</html>
