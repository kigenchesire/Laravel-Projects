<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Hello {{$semester->name}}</h2>
    <ul>
    @foreach($units as $unit)
        <li> {{$unit->name}}</li>
       
   @endforeach </ul>
   
</body>
</html>