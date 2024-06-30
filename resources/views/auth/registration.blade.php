{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link href="/assets/css/Formstyle.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="continer">
        <div class="wrapper">
            <div class="title">
                <span>Registration</span>
            </div>
            <form>

            <div class="row">
                <i class='fas fa-user'></i>
                <input type='text' value='' placeholder="username" required name="name">
            </div>
            <div class="row">
                <i class='fas fa-user'></i>
                <input type='text' value='' placeholder="Email" required name="email">
            </div>

            </form>
        </div>
    </div>

</body>
</html> --}}



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
    <h2>Inscription</h2>

    <form action="{{route('registration_post')}}" method="post">
        @csrf
        <div class="input-box">
            <input type="text" placeholder="Entrez votre nom" name="name" value="{{ old('name') }}" required>
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-box">
            <input type="email" placeholder="Entrez votre email" name="email" value="{{ old('email') }}" required>
            <!--old() est une fonctionnalité de Laravel qui permet de récupérer les valeurs précédemment soumises par l'utilisateur-->
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-box">
            <input type="password" placeholder="Créez un mot de passe" name="password" required>
            @error('password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-box">
            <input type="password" placeholder="Confirmez le mot de passe" name="confirmpassword" required>
            @error('confirmpassword')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-box">
            <select class="selectbox" name="is_role" required>
                <option value="">Sélectionnez votre rôle</option>
                <option {{old('is_role') =='1'?'selected':''}} value="1">Agent Maritime</option>
                <option {{old('is_role') =='2'?'selected':''}} value="2">Chef</option>
                <option {{old('is_role') =='3'?'selected':''}} value="3">Client</option>
            </select>
            @error('is_role')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-box button">
            <input type="submit" value="S'inscrire maintenant">
        </div>
        <div class="text">
        <h3>Vous avez déjà un compte? <a href="{{route('login')}}">Connectez-vous maintenant</a></h3>
    </div>
    <div class="text">
        <h3>Retour à la page d'accueil? <a href="{{route('welcom')}}">Accueil</a></h3>
    </div>

    </form>

  </div>
</body>
</html>
