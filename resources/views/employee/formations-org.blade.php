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
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <button type="submit" class="btn ajo-form" data-toggle="modal" data-target="#formation">Ajouter une formation</button>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="table-scroll">
                        <table class="table table-striped table-responsive table-style">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Nom de l'établissement</th>
                                <th>nom de la formation</th>
                                <th>Année</th>
                                <th scope="col">Opt.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userFormations as $formation)
                                <tr>
                                    <td scope="col">{{ $formationTypes[$formation->type] }}</td>
                                    <td scope="col">{{ $formation->facility_name }}</td>
                                    <td scope="col">{{ $formation->formation_name }}</td>
                                    <td scope="col">{{ $formation->year }}</td>
                                    <td scope="col">
                                        <a href="/{{ Auth::user()->role() }}/formations/{{ $formation->id }}/edit" class=" icon-c-ed"></a>
                                        <a href="/{{ Auth::user()->role() }}/formations/{{ $formation->id }}/delete"
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
    @include('modals.formations-modal')
    @include('modals.delete')
    @include('message')

@endsection
