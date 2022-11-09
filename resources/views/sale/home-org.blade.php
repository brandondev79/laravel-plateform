@extends('admin.layouts.app')

@section('content')

    <div class="container">
        <div class="row margin-row">
            {{--<div class="col-md-4 col-sm-4 col-xs-4 style-col sale-filter-btn active">
                Filtrer par nom
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 sale-filter-btn style-col">
                Filtrer par formations
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 sale-filter-btn style-col">
                Filtrer par competences
            </div>--}}
        </div>
        <div class="row margin-row">
            <div class="full-width">
                <form action="/action_page.php">
                    <div class="relative ">
                        <input type="text" placeholder="" id="saleSearchInput" name="search" class="input-style-1">
                        <button class ="search-button-1" type="submit"><i class="fa fa-search-icon-custom"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row margin-row">
            <div class="col-md-2 col-sm-2 col-xs-4 tex-despon">Disponibilitee: </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="with-boders-flex">
                    <span class="with-boder border-red"><span class="dot red"></span></span>
                    <span class="with-boder border-yellow"><span class="dot yellow"></span></span>
                    <span class="with-boder border-green"><span class="dot green"></span></span>
                </div>
            </div>
        </div>
        <div class="row table-scroll">
            <table class="table table-striped table-responsive table-style-profi">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Poste</th>
                    <th>Annees d'experience</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="sale-search-container">
                        <td class="checkthis" data-skills="" data-formations="" data-title="{{ strtolower($user->name) }}">{{ $user->name }} <span class="dot-td {{ $user->circleColor() }}"></span></td>
                        <td class="checkthis" data-skills="" data-formations="" data-title="{{ strtolower($user->last_name) }}">{{ $user->last_name }}</td>
                        <td class="checkthis" data-title="" data-formations="" data-skills="{{ strtolower(implode(',', $user->skills->pluck('title')->toArray())) }}">{{ $user->city }}</td>
                        <td class="checkthis" data-title="" data-skills="" data-formations="{{ strtolower(implode(',', $user->formations->pluck('formation_name')->toArray())) }}">{{ $user->year_of_experience }} ans</td>
                        <td><a class="cd-popup-trigger"><a href="/{{ Auth::user()->role() }}/showUserResume/{{ $user->id }}">Voir details CV</a></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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

    @include('message')
@endsection
