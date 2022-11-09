@extends('layouts.app')

@section('content')

    <div class="col-md-6">
        <div class="col-with-pad-r col-with-pad-l row-80">
            <div class="row  margin-row">
                <div class="col-md-8 col-xs-12">

                    <form action="/action_page.php">
                        <div class="relative">
                            <input type="text" placeholder="Trouver une competence" name="search" class="input-style">
                            <button class ="search-button" type="submit"><i class="fa fa-search-icon-custom"></i></button>
                        </div>
                    </form>

                </div>
                <div class="col-md-4 col-xs-12">
                    <button type="submit" class="btn btn-enr ajo-form" data-toggle="modal" data-target="#mission">Ajouter une mission</button>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="table-scroll">
                        <table class="table table-striped table-responsive table-style table-hover table-sm table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Client</th>
                                <th scope="col">Periode</th>
                                <th scope="col">Nom du poste</th>
                                <th scope="col">Environment</th>
                                <th scope="col">Opt.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userMissions as $mission)
                            <tr>
                                <td scope="col">{{ $mission->customer }}</td>
                                <td scope="col">{{ $mission->period_start }} - {{ $mission->period_end }}</td>
                                <td scope="col">{{ $mission->position }}</td>
                                <td scope="col">{{ $mission->environment }}</td>
                                <td scope="col">
                                    <a href="/{{ Auth::user()->role() }}/missions/{{ $mission->id }}/edit" class=" icon-c-ed"></a>
                                    <a href="/{{ Auth::user()->role() }}/missions/{{ $mission->id }}/delete" class="icon-c-del"
                                       class="icon-c-del"
                                       data-toggle="modal"
                                       data-target="#suprimeModal"
                                       onclick="deleteUrl = $(this).attr('href')"></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var deleteUrl = '';
    </script>
    @include('partials.resumes.resume-' . $settings->template)
    @include('modals.missions-modal')
    @include('modals.delete')
    @include('message')

@endsection
