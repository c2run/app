<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Mensaje enviado de:   {{$mensaje['name']}}         </p>
    <p>Email: {{$mensaje['email']}} </p>
    <p><strong>Asunto:</strong>  {{$mensaje['asunto']}}     </p>
    <p>Contenido del email</p>
    <p><strong>Contenido:</strong> {{$mensaje['content']}}   </p>
</body>
</html>