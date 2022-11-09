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
                    <button class="btn btn-violet btn-rounded-2x btn-add">Ajouter une mission</button>
                </div>
            </div>

            @foreach($userMissions as $mission)
                <div class="row grid-margin">
                    <div class="col">
                        <div class="card card-profile" data-company="{{ $mission->customer }}">
                            <div class="card-body">
                                <div class="company">
                                    <img class="company-logo" src="{{ URL::asset('img/'.company_name($mission->customer).'.png') }}" alt="avatar">
                                    <div class="company-detail ml-5">
                                        @if(is_now($mission->period_end))
                                            <p>{{ $mission->customer }} - {{ date_string($mission->period_start) }} - à Aujourd'hui </p>
                                        @else
                                            <p>{{ $mission->customer }} - {{ date_string($mission->period_start) }} - {{ date_string($mission->period_end) }}</p>
                                        @endif
                                        <p>{{ $mission->position }}</p>
                                        <p class="text-subtitle">{{ $mission->environment }}</p>
                                    </div>
                                    <div class="action">
                                        <a href="/{{ Auth::user()->role() }}/missions/{{ $mission->id }}/edit" class=" icon-c-ed"></a>
                                        <a href="/{{ Auth::user()->role() }}/missions/{{ $mission->id }}/delete" class="icon-c-del"
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
    @include('employee.modals.add-mission')
    @include('employee.modals.delete')
@endsection
@section('scripts')
    <script src="{{ URL::asset('js/employee/mission.js') }}"></script>
@endsection