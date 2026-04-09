<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game</title>
</head>
<body>

<?php
@foreach($Spelletjes as $games)
    <p>{{ $games->name }}</p>
@endforeach

<h1>{{$games->name}}</h1>>

?>
</body>
</html>
