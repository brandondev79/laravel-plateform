@extends('employee.layouts.app')
@section('content')
    <div class="row">
        <form id="userForm" enctype="multipart/form-data" action="/{{ Auth::user()->role() }}/users/{{ Auth::user()->id }}/update" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
        <div class="col grid-distance">
            <div class="row grid-margin">
                <div class="col">
                    <div class="card card-profile">
                        <div class="card-body">
                            <div class="d-flex flex-row flex-wrap">
                                <img class="profile-avatar justify-content-center align-self-center image-de-profil" id="blah" src="{{ URL::asset('img') . '/' . $user->image_name }}" alt="avatar">
                                <input type="file" class="thumbnail-input" id="thumbnail-input" name="thumb">
                                <div class="wrapper ml-4 profile-justify-width">
                                    <div class="profile-title d-flex">
                                        <p class="mr-5">{{ $user->name }} {{ $user->last_name }}</p>
                                        <p class="ml-5">{{ $user->year_of_experience ?? 0 }} ans d'expériences</p>
                                    </div>
                                    <p class="profile-description">{{ $user->post ?? "Aucune" }}</p>
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
            </div>
            <div class="row grid-margin">
                <div class="col">
                    <div class="card card-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 info-title">
                                    <p>Adresse</p>
                                    <p>Code Postal</p>
                                    <p>Ville</p>
                                    <p>Numéro de téléphone</p>
                                    <p>Adresse email</p>
                                </div>
                                <div class="col-7 info-content user-info">
                                    <p style="margin-top:2px; margin-left:5px;" class="editable">{{ $user->address  }} </p><input type="text" class="inputeditable" id="inputgroupname" style="display:none; border: 1px solid #707070;" name="address" value="{{ $user->address }}">
                                    <p style="margin-top:2px; margin-left:5px;" class="editable">{{ $user->postal_code }} </p><input type="text" class="inputeditable" id="inputgroupname" style="display:none; border: 1px solid #707070;" name="postal_code" value="{{ $user->postal_code }}">
                                    <p style="margin-top:2px; margin-left:5px;" class="editable">{{ $user->city }} </p><input type="text" class="inputeditable" name="city" id="inputgroupname" style="display:none; border: 1px solid #707070;" value="{{ $user->city }}">
                                    <p style="margin-top:2px; margin-left:5px;" class="editable">{{ $user->cellphone }} </p><input type="text" class="inputeditable" name="cellphone" id="inputgroupname" style="display:none; border: 1px solid #707070;" value="{{ $user->cellphone }}">
                                    <p style="margin-top:2px; margin-left:5px;" class="editable">{{ $user->email }} </p><input type="text" class="inputeditable" name="email" id="inputgroupname" style="display:none; border: 1px solid #707070;" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grid-margin">
                <div class="col">
                    <div class="card card-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 info-title">
                                    <p>Années d’expériences</p>
                                    <p>Anglais</p>
                                    <p>Autre langue</p>
                                    <p>En mission O/N</p>
                                </div>
                                <div class="col-7 info-content">
                                    <p style="margin-top:2px; margin-left:5px;" class="editable">{{ $user->year_of_experience ?? 0 }} </p> <input type="text" class="inputeditable" id="inputgroupname" style="display:none; border: 1px solid #707070;" name="year_of_experience" value="{{ $user->year_of_experience ?? 0 }}">
                                    <p style="margin-top:2px; margin-left:5px;" class="editable">{{ isset($englishOptions[$user->english]) ? $englishOptions[$user->english]['title'] : '' }} </p> 
                                    <select class="inputeditable" id="inputgroupname" style="display:none; border: 1px solid #707070;" name="english">
                                        @foreach($englishOptions as $option)
                                            <option {{ (isset(Auth::user()->english) && $user->english == $option['val']) ? 'selected' : '' }} value="{{ $option['val'] }}">{{ $option['title'] }}</option>
                                        @endforeach
                                    </select>
                                    <p style="margin-top:2px; margin-left:5px;" class="editable">{{ $user->other_language }} </p> <input type="text" name="other_language" class="inputeditable" id="inputgroupname" style="display:none; border: 1px solid #707070;" value="{{ $user->other_language }}">
                                    <p style="margin-top:2px; margin-left:5px;" class="editable">{{ $user->on_mission ? 'Oui' : 'Non' }} </p> 
                                    <div class="inputeditable" id="inputgroupname" style="display:none; border: 1px solid #707070;">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" {{ $user->on_mission ? 'checked' : '' }} type="radio" data-val="Oui" name="on_mission"
                                                   id="mission1" value="1">
                                            <label class="form-check-label" for="mission1">Oui</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" {{ !$user->on_mission ? 'checked' : '' }} type="radio" data-val="Non" name="on_mission"
                                                   id="mission2" value="0">
                                            <label class="form-check-label" for="mission2">Non</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 save-button">
            <button type="submit" class="btn btn-info" id="btn-enr">Enregistrer</button>
        </div>
        </form>
        <div class="col grid-distance">
            @include('partials.resumes.resume-'.$settings->template)
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

    $( document ).ready(function() {
        $('.editable').on('click',function(){

            var groupname = $(".editable").html();
            $(this).css({'display':"none"});
            $(this).next().css({'display':'block'});
            $(this).next().focus();
            // $(this).next().val(groupname);
        });

        $(".inputeditable").focusout(function(){
          $(this).prev().html($(this).val());
          $(this).css({'display':'none'});
          $(this).prev().css({'display':"block","margin-left":"3px"});

          $('.form-check-input:checked + label').parent().parent().prev().text($('.form-check-input:checked + label').text());
          $('select option:selected').parent().prev().text($('select option:selected').text());
        });

        $('.image-de-profil').click(function () {
          $('.thumbnail-input').click();
        });
  
        $('.thumbnail-input').change(function () {
                var file    = document.querySelector('input[type=file]').files[0];
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            
        });
    });
    </script>
@endsection