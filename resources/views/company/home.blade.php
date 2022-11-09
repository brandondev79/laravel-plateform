@extends('company.layouts.app')
@section('content')
    <div class="container-search">
        <!-- SEARCH INPUT -->
        <div class="row">
            <div class="col grid-margin">
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-shadow input-rounded" placeholder="Rechercher un profil">
                </div>
            </div>
        </div>

        <!-- SEARCH SUGGESTION -->
        <div class="row">
            <div class="col grid-margin">
                <ul class="list-inline search-suggestion">
                    <li class="list-inline-item search-item">Tous les profils</li>
                    <li class="list-inline-item search-item">Employés</li>
                    <li class="list-inline-item search-item">Candidats potentiels</li>
                    <li class="list-inline-item search-item">
                        <button class="btn btn-dark btn-rounded btn-sm btn-block">Filtrer les profils</button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- SEARCH RESULTS -->
        <div class="row">
            <div class="col grid-margin">
                <div class="card card-profile">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <img class="profile-avatar justify-content-center align-self-center" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <div class="wrapper ml-4">
                                <div class="profile-title d-flex">
                                    <p class="mr-4">Maxime Elbaz</p>
                                    <p class="ml-4">9 ans d'expériences</p>
                                </div>
                                <p class="profile-description profile-description__sm">Développeur Full Stack</p>
                                <div class="profile-tags">
                                    <span class="badge badge-sm badge-pill badge-theme-lime-03">Node JS</span>
                                    <span class="badge badge-sm badge-pill badge-theme-lemon-03">Adobe XD</span>
                                    <span class="badge badge-sm badge-pill badge-theme-pastel-03">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 profile-commercial">
                            <span>Commercial assigné :</span>
                            <img class="profile-avatar profile-avatar__sm" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <span class="ml-5">CV actualisé il y a 1 heure</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col grid-margin">
                <div class="card card-profile">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <img class="profile-avatar justify-content-center align-self-center" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <div class="wrapper ml-4">
                                <div class="profile-title d-flex">
                                    <p class="mr-4">Maxime Elbaz</p>
                                    <p class="ml-4">9 ans d'expériences</p>
                                </div>
                                <p class="profile-description profile-description__sm">Développeur Full Stack</p>
                                <div class="profile-tags">
                                    <span class="badge badge-sm badge-pill badge-theme-lime-03">Node JS</span>
                                    <span class="badge badge-sm badge-pill badge-theme-lemon-03">Adobe XD</span>
                                    <span class="badge badge-sm badge-pill badge-theme-pastel-03">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 profile-commercial">
                            <span>Commercial assigné :</span>
                            <img class="profile-avatar profile-avatar__sm" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <span class="ml-5">CV actualisé il y a 1 heure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col grid-margin">
                <div class="card card-profile">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <img class="profile-avatar justify-content-center align-self-center" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <div class="wrapper ml-4">
                                <div class="profile-title d-flex">
                                    <p class="mr-4">Maxime Elbaz</p>
                                    <p class="ml-4">9 ans d'expériences</p>
                                </div>
                                <p class="profile-description profile-description__sm">Développeur Full Stack</p>
                                <div class="profile-tags">
                                    <span class="badge badge-sm badge-pill badge-theme-lime-03">Node JS</span>
                                    <span class="badge badge-sm badge-pill badge-theme-lemon-03">Adobe XD</span>
                                    <span class="badge badge-sm badge-pill badge-theme-pastel-03">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 profile-commercial">
                            <span>Commercial assigné :</span>
                            <img class="profile-avatar profile-avatar__sm" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <span class="ml-5">CV actualisé il y a 1 heure</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col grid-margin">
                <div class="card card-profile">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <img class="profile-avatar justify-content-center align-self-center" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <div class="wrapper ml-4">
                                <div class="profile-title d-flex">
                                    <p class="mr-4">Maxime Elbaz</p>
                                    <p class="ml-4">9 ans d'expériences</p>
                                </div>
                                <p class="profile-description profile-description__sm">Développeur Full Stack</p>
                                <div class="profile-tags">
                                    <span class="badge badge-sm badge-pill badge-theme-lime-03">Node JS</span>
                                    <span class="badge badge-sm badge-pill badge-theme-lemon-03">Adobe XD</span>
                                    <span class="badge badge-sm badge-pill badge-theme-pastel-03">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 profile-commercial">
                            <span>Commercial assigné :</span>
                            <img class="profile-avatar profile-avatar__sm" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <span class="ml-5">CV actualisé il y a 1 heure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col grid-margin">
                <div class="card card-profile">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <img class="profile-avatar justify-content-center align-self-center" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <div class="wrapper ml-4">
                                <div class="profile-title d-flex">
                                    <p class="mr-4">Maxime Elbaz</p>
                                    <p class="ml-4">9 ans d'expériences</p>
                                </div>
                                <p class="profile-description profile-description__sm">Développeur Full Stack</p>
                                <div class="profile-tags">
                                    <span class="badge badge-sm badge-pill badge-theme-lime-03">Node JS</span>
                                    <span class="badge badge-sm badge-pill badge-theme-lemon-03">Adobe XD</span>
                                    <span class="badge badge-sm badge-pill badge-theme-pastel-03">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 profile-commercial">
                            <span>Commercial assigné :</span>
                            <img class="profile-avatar profile-avatar__sm" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <span class="ml-5">CV actualisé il y a 1 heure</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col grid-margin">
                <div class="card card-profile">
                    <div class="card-body">
                        <div class="d-flex flex-row flex-wrap">
                            <img class="profile-avatar justify-content-center align-self-center" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <div class="wrapper ml-4">
                                <div class="profile-title d-flex">
                                    <p class="mr-4">Maxime Elbaz</p>
                                    <p class="ml-4">9 ans d'expériences</p>
                                </div>
                                <p class="profile-description profile-description__sm">Développeur Full Stack</p>
                                <div class="profile-tags">
                                    <span class="badge badge-sm badge-pill badge-theme-lime-03">Node JS</span>
                                    <span class="badge badge-sm badge-pill badge-theme-lemon-03">Adobe XD</span>
                                    <span class="badge badge-sm badge-pill badge-theme-pastel-03">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 profile-commercial">
                            <span>Commercial assigné :</span>
                            <img class="profile-avatar profile-avatar__sm" src="{{ URL::asset('img/mark.png') }}" alt="avatar">
                            <span class="ml-5">CV actualisé il y a 1 heure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection