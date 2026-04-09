<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Maak een nieuw spel aan</h1>

<form method = 'post' action = '{{url('/index')}}'>
    @csrf
    <label  for="name"> Game Name: </label>
    <input type='text' name='name'>

    <label  for="price"> Game Price: </label>
    <input type='text' name='price' id="price">

    <label  for="description"> Game Description: </label>
    <input type='text' name='description'>

    <label  for="rating"> Game Rating: </label>
    <input type='number' name='rating'>

    <label  for="Submit"> Price: </label>
    <input type='submit' value='Submit' name="Submit">

</form>


<a href="{{ url('/home') }}">Home Pagina</a>


</body>
</html>
