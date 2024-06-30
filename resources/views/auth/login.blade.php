<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title>
    <link href="/assets/css/Formstyle.css" rel="stylesheet">

   </head>
<body>

  <div class="wrapper">
    @include('message')

    <h2>Login</h2>
    <form action="{{route('login_post')}}" method="post">
        @csrf

      <div class="input-box">
        <input type="email" placeholder="Enter votre email" value="{{old('email')}}" name='email' required>
      </div>
      <div class="input-box">
        <input type="password" name='password' placeholder=" password" required>
      </div>




      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>Creer un compte? <a href="{{route('registration')}}">Registrer</a></h3>
      </div>
      <div class="text">
        <h3>retour page acceuil? <a href="{{route('welcom')}}">Acceuil</a></h3>
      </div>
    </form>
  </div>
  @auth
    <script>
        var userRole = "{{ Auth::user()->role }}";
    </script>
@endauth

</body>
</html>

