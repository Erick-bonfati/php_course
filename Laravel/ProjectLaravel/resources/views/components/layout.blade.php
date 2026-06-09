<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div class="container">
    <h1>{{$title}}</h1>

    {{ $slot }} <!-- O slot é onde o conteúdo da view que chama esse layout vai ser inserido -->
  </div>

</body>

</html>