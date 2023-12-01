<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Aplicación</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{ asset('css/error404.css') }}">
</head>
<body>
<body>
<div class="flex-container">
  <div class="text-center">
    <h1>
      <span class="fade-in" id="digit1">4</span>
      <span class="fade-in" id="digit2">0</span>
      <span class="fade-in" id="digit3">4</span>
    </h1>
    <h3 class="fadeIn">PAGE NOT FOUND</h3>
    <h4 class="fadeIn">Si lees esto, no deberías estar aqui.  :]</h4>
    <button type="button" name="button"><a href="{{ route('empleados.index') }}">Regresa a casa</a></button>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>