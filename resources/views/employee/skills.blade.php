<script>
    var skillsVar = [{{ implode(',', $userSkills) }}];
</script>

@extends('employee.layouts.app')
@section('content')
    <div class="row">
        <div class="col grid-distance">
            <!-- SEARCH INPUT -->
            <div class="row">
                <div class="col grid-margin">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control input-shadow input-rounded search-active" placeholder="Rechercher une compétence">
                    </div>
                </div>
            </div>

            <!-- BOX 1 -->
            <div class="container-form text-col">
                @foreach($skillsCategories as $i => $cat)
                    <div class="category-container">
                        <div class="category-body">
                            <div class="row section-1">
                                <div class="col-md-10 skill-title">
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
                    </div>
                @endforeach
            </div>

            <div class="col-md-4 col-xs-12 save-button">
                <form action="/{{ Auth::user()->role() }}/skills/update" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="hidden" id="skill_ids" name="skill_ids">
                    <button type="submit" class="btn btn-info" id="btn-enr">Enregistrer</button>
                </form>
            </div>

        </div>
        <div class="col grid-distance">
            @include('partials.resumes.resume-'.$settings->template)
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('js/employee/skill.js') }}"></script>
@endsection