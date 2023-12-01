<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>

  </style>
</head>

<body>

  <div class="flex-container">
    <div class="menu">

      <div class="login-wrap">

        <div class="login-html">
          <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sesión</label>
          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
          <div class="login-form">


<form method="POST" action="{{ url('/login') }}">
    @csrf
    <div class="sign-in-htm">
        <div class="group">
            <label for="email" class="label">Email</label>
            <input id="email" name="email" type="text" class="input" style="color:#000 !important;" value="{{ old('email') }}" autocomplete="username">
        </div>
        <div class="group">
            <label for="password" class="label">Contraseña</label>
            <input id="password" name="password" type="password" class="input" data-type="password" style="color:#000 !important;" value="{{ old('password') }}" autocomplete="current-password">
        </div>
        <div class="group">
            <input id="check" type="checkbox" class="check" checked>
        </div>
        <div class="group">
            <input type="submit" class="button" value="Iniciar Sesión">
        </div>
        <div class="hr"></div>
        <!-- <div class="foot-lnk">
            <a href="#forgot">Forgot Password?</a>
        </div> -->
    </div>
</form>





    <form method="POST" action="{{ url('/register') }}">
        @csrf
            <div class="sign-up-htm">
              <div class="group">
                <label for="name" class="label">Nombre</label>
                <input id="name" name="name" value="{{ old('name') }}" type="text" class="input" style="color:#6a6f8c !important;
">
              </div>
              <div class="group">
                  <label for="emailr" class="label">Email</label>
                  <input id="emailr" name="email" value="{{ old('email') }}" type="text" class="input" style="color:#6a6f8c !important;">
             </div>
                
            <div class="group">
                <label for="passwordr" class="label">Contraseña</label>
                <input id="passwordr" name="password" type="password" class="input" data-type="password" style="color:#6a6f8c !important;">
            </div>
              
              <div class="group">
                <input type="submit" class="button" value="Registrarse">
              </div>
              <!-- <div class="foot-lnk">
                <label for="tab-1"><a>Already Member?</a></label>
              </div> -->
            </div>
</form>


</div>
@if(session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
        </div>

      </div>
    </div>

    <div class="main">
      <img class="bgimg" src="https://orientapae.com/latam/imgs/Modelo%20LATAM.png" alt="Trulli">
    </div>

    <div class="main2">
      <p color="white">
        <h1>¡Examen Back Esteban!</h1>
        <p>Bienvenidos a mi examen.</p>
      </p>
    </div>

  </div>
</body>

</html>






<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
</body>
</html> -->
