<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
</head>
<body>
  <h1>{{$title}}</h1>

  {{ $slot }} <!-- O slot é onde o conteúdo da view que chama esse layout vai ser inserido -->
</body>
</html>