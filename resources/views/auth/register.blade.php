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
                    <h5 class="LoginContainer__title">Créer un compte</h5>
                    <form class="LoginPasswordForm" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="LoginPasswordForm__fields">
                            <input type="text" name="name" autocomplete="name" placeholder="Prénom" class="LoginPasswordForm__input LoginPasswordForm__input-username" autocorrect="off" spellcheck="off" required value="">
                            <input type="text" name="last_name" autocomplete="lastName" placeholder="Nom de famille" class="LoginPasswordForm__input LoginPasswordForm__input-username" autocorrect="off" spellcheck="off" required value="">
                            <input type="email" name="email" autocomplete="email" placeholder="Email" class="LoginPasswordForm__input LoginPasswordForm__input-username" autocorrect="off" spellcheck="off" required value="">
                            <input type="password" name="password" autocomplete="password" placeholder="Mot de passe" class="LoginPasswordForm__input LoginPasswordForm__input-username" autocorrect="off" spellcheck="off" required value="">
                            <input type="password" name="password_confirmation" autocomplete="password" placeholder="Mot de passe de confirmation" class="LoginPasswordForm__input LoginPasswordForm__input-username" autocorrect="off" spellcheck="off" required value="">
                            <div class="LoginPasswordForm__checkbox-wrapper">
                                <h4 class="LoginPasswordForm__title">Register As:</h4>
                                <div class="LoginPasswordForm__checkbox">
                                    <input type="radio" name="type" value="1" checked>
                                    <label>Pigiste</label>
                                </div>
                                <div class="LoginPasswordForm__checkbox">
                                    <input type="radio" name="type" value="4">
                                    <label>Entreprise</label>
                                </div>
                            </div>
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