<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
        <meta name="description" content="165c. uniques">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <title>TripBook</title>
</head>
<body id="index">
<img id ="logo" src="{{asset('images/logo.png')}}" alt="logo">
    <div id="connexion" >
    <h1>Connexion </h1>
    <form  role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-mail</label>
        </div>
        <div>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span >
            <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" > Mot de passe </label>

        <div>
        <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
            <span>
            <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div>
        <label>
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>Se souvenir de moi
        </label>
    </div>
    

    <div>
    
    <button type="submit" class="btn btn-primary">
    Se connecter
    </button>
    </div>
                       
    </form>               
</div>

 <div id="inscription" class="panel-body">
    <h1>Inscription </h1>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Pseudo</label>

        <div>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span>
                <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">Adresse e-mail</label>

        <div>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span>
            <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Mot de passe</label>

        <div>
        <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span>
                <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div>

        <label for="password-confirm" class="col-md-4 control-label">Confirmation de du mot de passe </label>

        <div>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>

  
    <div>
        <button type="submit" class="btn btn-primary">
        S'inscrire 
        </button>
    </div>
                        
</form>
</div>
</body>
</html>
