@extends('sale.layouts.app')
@section('content')
    <div class="container-search">
        <!-- SEARCH INPUT -->
        <div class="row">
            <div class="col grid-margin">
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-shadow input-rounded search-active" placeholder="Rechercher un profil">
                </div>
            </div>
        </div>

        <!-- SEARCH RESULTS -->
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-6 col-xs-12 grid-margin">
                    <div class="card card-profile card-clickable"
                         data-id="{{ $user->id }}"
                         data-first-name="{{ $user->name }}"
                         data-last-name="{{ $user->last_name }}"
                         data-email="{{ $user->email }}"
                         data-year-of-experience="{{ $user->year_of_experience ?? 0 }}"
                         data-job-type="{{ $user->post ?? "Aucune" }}"
                         data-skills="{{ implode(',', $user->skills->pluck('title')->toArray()) }}"
                         data-role="{{ $user->role() }}"
                    >
                        <div class="card-body">
                            <div class="d-flex flex-row flex-wrap">
                                <img class="profile-avatar justify-content-center align-self-center" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                                <div class="wrapper ml-4 profile-justify-width">
                                    <div class="profile-title d-flex">
                                        <p class="mr-4">{{ $user->name }} {{ $user->last_name }}</p>
                                        <p class="ml-4">{{ $user->year_of_experience ?? 0 }} ans d'expériences</p>
                                    </div>
                                    <p class="profile-description profile-description__sm">{{ $user->post ?? "Aucune" }}</p>
                                    <div class="profile-tags">
                                        @foreach($user->skills as $key => $skill)
                                            <span class="badge badge-sm badge-pill badge-theme-{{ array_next($badgeColors, count($user->skills), $key) }}-03">{{ $skill->title }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('sale.modals.profile')
@endsection
@section('scripts')
    <script src="{{ URL::asset('js/sale/user.js') }}"></script>
@endsection