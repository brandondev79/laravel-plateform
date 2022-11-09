@extends('employee.layouts.app')
@section('content')
    <div class="row">
        <div class="col grid-distance">
            <!-- SEARCH INPUT -->
            <div class="row">
                <div class="col-7 grid-margin">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control input-shadow input-rounded search-active" placeholder="Rechercher un profil">
                    </div>
                </div>
                <div class="col-5 grid-margin">
                    <button class="btn btn-violet btn-rounded-2x btn-add" data-toggle="modal" data-target="#formation">Ajouter une formation</button>
                </div>
            </div>

            @foreach($userFormations as $formation)
                <div class="row grid-margin">
                    <div class="col">
                        <div class="card card-profile" data-company="{{ $formationTypes[$formation->type] }}">
                            <div class="card-body">
                                <div class="company">
                                    <div class="company-detail ml-5">
                                        <p>{{ $formationTypes[$formation->type] }}</p>
                                        <p class="text-subtitle">{{ $formation->facility_name }}</p>
                                        <p class="text-subtitle">{{ $formation->formation_name }}</p>
                                        <p class="text-subtitle">{{ $formation->year }}</p>
                                    </div>
                                    <div class="action">
                                        <a href="/{{ Auth::user()->role() }}/formations/{{ $formation->id }}/edit" class=" icon-c-ed"></a>
                                        <a href="/{{ Auth::user()->role() }}/formations/{{ $formation->id }}/delete" class="icon-c-del"
                                           class="icon-c-del"
                                           data-toggle="modal"
                                           data-target="#suprimeModal"
                                           onclick="deleteUrl = $(this).attr('href')"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col grid-distance">
            @include('partials.resumes.resume-'.$settings->template)
        </div>
    </div>
    @include('employee.modals.formations-modal')
    @include('employee.modals.delete')
@endsection
@section('scripts')
    <script src="{{ URL::asset('js/employee/mission.js') }}"></script>
@endsection