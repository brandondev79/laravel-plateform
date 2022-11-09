@extends('auth.layouts.app')

@section('content')
    <!-- React root -->
    <div id="layout-login">
        <div>
            <div class="LoginContainer">
                <div class="LoginContainer">
                    <div class="HeaderLogo">
                        <a href="#"><img src="{{ URL::asset('front/logo-collab.png') }}" style="width: auto;height: 60px;"></a>
                    </div>
                    <br>
                    <h5 class="LoginContainer__title">Bonjour, content de vous revoir 👋</h5>
                    <form class="LoginPasswordForm" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="LoginPasswordForm__fields">
                            <input type="email" name="email" autocomplete="email" placeholder="Email" class="LoginPasswordForm__input LoginPasswordForm__input-username" autocorrect="off" spellcheck="off" required value="">
                            <input type="password" name="password" autocomplete="current-password" placeholder="Mot de passe" class="LoginPasswordForm__input LoginPasswordForm__input-password" autocorrect="off" spellcheck="off" required value="">
                            <a class="LoginPasswordForm__forgot" href="/password/reset">Oublié ?</a>
                        </div>
                        <div class="LoginPasswordForm__submit">
                            <button class="ButtonRedesigned primary normal" type="submit"><span class="ButtonRedesigned__text">Se connecter</span></button>
                        </div>
                    </form>
                    <div class="NoAccount"><span>Vous n'avez pas encore de compte ?</span><a class="link" href="{{ route('register') }}">Inscrivez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="react__notifications"></div>
@endsection