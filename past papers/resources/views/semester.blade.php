<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    @php
    $semester = App\Models\Semester::all();
    @endphp
    @foreach($semester as $sem)
    <li>
        <a href="{{ url ('pastpapers/'. $sem->slug)}}">{{$sem->name}}</a>
    </li>
  
    @endforeach

    
</body>
</html>