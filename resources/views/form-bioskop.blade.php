<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Form</title>
</head>

<body>
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $pesan)
               <span style="display:block">- {{$pesan}}</span>
               <br>
            @endforeach
        </div> 
        @endif
    <div class="container-buat">
            
        <div class="judul-samping">
            <span>Nama :</span>
            <span>Lokasi :</span>
        </div>
       
    <form class="form-ngetes" enctype="multipart/form-data" action="{{route('movie.add')}}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Enter Title">
            <input type="text" name="lokasi" placeholder="Enter Sinopsis">
            <button type="submit" value="Submit" class="btn">
        </form>

    </div>


</body>

</html>
