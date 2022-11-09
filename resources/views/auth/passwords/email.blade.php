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
                    <h5 class="LoginContainer__title">Réinitialiser le mot de passe</h5>
                    <form class="LoginPasswordForm" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="LoginPasswordForm__fields">
                            <input type="email" name="email" autocomplete="email" placeholder="Email" class="LoginPasswordForm__input LoginPasswordForm__input-username" autocorrect="off" spellcheck="off" required value="">
                        </div>
                        <div class="LoginPasswordForm__submit">
                            <button class="ButtonRedesigned primary normal" type="submit"><span class="ButtonRedesigned__text">Soumettre</span></button>
                        </div>
                    </form>
                    <div class="NoAccount"><span>Vous avez déjà un compte ?</span><a class="link" href="{{ route('login') }}">Connectez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="react__notifications"></div>
@endsection