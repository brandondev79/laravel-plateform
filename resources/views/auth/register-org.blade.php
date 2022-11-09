<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>
<header>
    @include('partials.nav')
</header>
<body class="index-container">
    <div class="container">
        <!--<h1 class="form-heading">login Form</h1>-->
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>Registre</h2>
                </div>
                <form id="Login" action="{{ route('register') }}" method="POST">
                    {{ csrf_field()  }}
                    <div class="form-group">
                        <i class="far fa-user-custom"></i>
                        <input type="text" required class="form-control" id="name" name="name" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input type="email" required class="form-control" id="email" name="email" placeholder="Entrer votre email">
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock-custom"></i>
                        <input type="password" required class="form-control" id="password" name="password" placeholder="Tapez votre mot de passe">
                    </div>
                    <div class="form-group">
                        <i class="fa fa-check"></i>
                        <input type="password" required class="form-control" id="password-confirm" name="password_confirmation" placeholder="Entrez votre mot de passe de confirmation">
                    </div>
                    <div class="container-fluid">
                        <button type="submit" class="btn btn-primary" style="float: none; bottom: 0;">Soumettre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://code.jquery.com/jquery-1.x-git.min.js" crossorigin="anonymous"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('message')
</body>

</html>