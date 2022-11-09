@extends('admin.layouts.app')

@section('content')

    <div class="container fixed-to-890">
        <div class="row margin-row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <a id="contact" class="admin-btn-ajouter" data-toggle="modal" data-target="#profil">Ajouter un profil</a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <a class="btn-change-temp" data-toggle="modal" data-target="#template">Changer Template</a>
            </div>
        </div>
        <div class="row margin-row">
            <div class="col-md-12">
                <form>
                    <div class="relative">
                        <input type="text" placeholder="" id="adminSearchInput" name="search" class="input-style-1">
                        <button class ="search-button-1" type="submit"><i class="fa fa-search-icon-custom"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row table-scroll mar-t-m">
            <div class="col-md-12">
                <table class="table table-striped table-responsive table-style-profi">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Status</th>
                        <th>Modifier profils</th>
                        <th>Supprimer profils</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="admin-search-container">
                            <td class="checkthis" data-title="{{ strtolower($user->name) }}">{{ $user->name }}</td>
                            <td class="checkthis" data-title="{{ strtolower($user->last_name) }}">{{ $user->last_name }}</td>
                            <td>{{ $user->role() }}</td>
                            <td>@if($user->role() == 'employee')<a href="/{{ Auth::user()->role() }}/showUserResume/{{ $user->id }}">Modifier</a>@endif</td>
                            <td class="myBtn1"><a data-toggle="modal"
                                                  data-target="#suprimeModal"
                                                  onclick="deleteUserID = {{ $user->id }};
                                                  $('#deleteUserName').text('{{ $user->name . ' ' . $user->last_name }}')">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="cd-popup {{ isset($resumePopupVisible) ? 'is-visible' : '' }}" role="alert">
        <ul class="cd-buttons">
            <li><a href="/pdf-download/{{ request('id') }}"><i class="fa fa-download"></i> Telecharger en pdf</a></li>
        </ul>
        <div class="cd-popup-container back-white">
            @include('partials.resumes.resume-' . $settings->template)
            <a href="#0" class="cd-popup-close img-replace"></a>
        </div> <!-- cd-popup-container -->
    </div> <!-- cd-popup -->

    @include('admin.modals.add-user')

    @include('admin.modals.confirmation')

    @include('admin.modals.delete-user')

    @include('admin.modals.change-template')

    @include('message')
@endsection
