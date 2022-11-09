@extends('layouts.app')

@section('content')

    <div class="col-md-6">
        <div class="col-with-pad-r col-with-pad-l row-80">
            <div class="row margin-row">
                <div class="col-md-8 col-xs-12">

                        <div class="relative">
                            <input type="text" placeholder="Trouver une competence" autocomplete="off" id="skillsSearchInput" name="search" class="input-style">
                            <button class ="search-button" type="submit"><i class="fa fa-search-icon-custom"></i></button>
                            <div class="container-fluid search-results">
                                <span class="search-close"></span>
                                <ul class="list-group checked-list-box" id="searchResults">

                                </ul>
                            </div>
                            <div id="emptyResults">
                                <span>Nous n’avons pas trouvé la compétence recherchée, voulez vous la créer ?</span>
                                    <div class="btn-group float-right">
                                        <a href="#" class="btn btn-left btn-info" onclick="resetSearch()">Non</a>
                                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#skills" onclick="$('#skillName').val($('#skillsSearchInput').val())">Oui</a>
                                    </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                </div>
                <div class="col-md-4 col-xs-12">
                    <form action="/{{ Auth::user()->role() }}/skills/update" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <input type="hidden" id="skill_ids" name="skill_ids">
                        <button type="submit" class="btn btn-info" id="btn-enr">Enregistrer</button>
                    </form>
                </div>
            </div>
            <div class="container-form text-col">
                @foreach($skillsCategories as $i => $cat)
                    <div class="category-container">
                        <div class="row section-1">
                            <div class="col-md-10">
                                <span>{{ $cat->title }}:</span>
                            </div>
                            @if(!$i)
                            <div class="col-md-2">
                                <form action="/{{ Auth::user()->role() }}/skillsClear" method="post" id="clearSkills">{{ csrf_field() }}</form>
                                <i class="far fa-trash-alt-custom" title="Effacer toutes les compétences"></i>
                            </div>
                            @endif
                        </div>
                        @foreach($cat->skills as $j => $skill)
                                <a class="btn btn-form skill-tag {{ in_array($skill->id, $userSkills) ? ' btn-ajouter' : '' }}" id="skill{{ $skill->id }}" data-title="{{ strtolower($skill->title) }}" data-id="{{ $skill->id }}">{{ $skill->title }}</a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.resumes.resume-' . $settings->template)
    @include('modals.skills-modal')
    @include('message')

@endsection
