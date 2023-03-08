<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <style>

        body{
            background-image:url({{url('images/doc2.jpg')}})


        }
    </style>


</head>
<body class="body">
<h1>{{$mess}}</h1>
    {{-- <h1>mohamed ibrahim zayed</h1> --}}

    @foreach ($data as $key => $val)
    <h5>{{$val->id}}</h5>
    <h5>{{$val->name}}</h5>

    @endforeach

</body>
</html>
