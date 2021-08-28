<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saludos</title>
</head>
<body>
  <h1>Saludos <?php echo $nombre ?> </h1>
  <h1>Saludos  {{$nombre}} </h1>
  <h1>Saludos  {!! $apellido !!} </h1>

 <u>
     @forelse($mensaje as $mensaje)
         <p>{{$mensaje}}</p>
     @empty
             <p>No tienes ningun mensaje</p>
     @endforelse
 </u>

 @if(count($mensaje) === 0)
     <h1>No tienes mensajes</h1>
         @else
             <h1>No tienes mensajes</h1>
     @endif





</body>
</html>
