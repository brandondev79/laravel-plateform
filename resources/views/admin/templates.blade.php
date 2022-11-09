@extends('admin.layouts.app')
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
                    <li class="list-inline-item search-item">Technique</li>
                    <li class="list-inline-item search-item">Fonctionnel</li>
                    <li class="list-inline-item search-item">Design</li>
                    <li class="list-inline-item search-item">Marketing</li>
                    <li class="list-inline-item search-item">Conseil</li>
                    <li class="list-inline-item search-item">Junior</li>
                </ul>
            </div>
        </div>

        <!-- SEARCH RESULTS -->
        <div class="row">
            <div class="col-md-6 col-xs-12 grid-margin">
                <div class="card card-template">
                    <div class="card-body">
                        <div class="row">
                            <div class="col grid-margin">
                                <h5>Template {{ $settings->template }}</h5>
                            </div>
                            <div class="col text-right grid-margin">
                                <span class="badge badge-sm badge-pill badge-theme-lime-03">Technique</span>
                                <span class="badge badge-sm badge-pill badge-theme-lemon-03">Design</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <img src="/img/template{{ $settings->template }}.jpg" class="template-img" alt="template" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <button class="btn btn-violet btn-rounded-2x btn-sm btn-block text-13" type="button" data-toggle="modal" data-target="#template">Changer Template</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('admin.modals.change-template')