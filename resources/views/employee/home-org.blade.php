@extends('layouts.app')

@section('content')

    <div class="col-md-6">
        <form id="userForm" enctype="multipart/form-data" action="/{{ Auth::user()->role() }}/users/{{ Auth::user()->id }}/update" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="col-with-pad-r col-with-pad-l row-80">
                <div class="row  margin-row">
                    <div class="col-md-8 col-xs-12">

                        <div class="dark-span">
                            <div class="date-dark-span">
                                <div class="day-ds">{{ $date->formatLocalized('%d') }}</div>
                                <div class="date-ds">
                                    <div class="month-ds">{{ $date->formatLocalized('%B') }} {{ $date->year }}</div>
                                    <div class="salute-ds">{{ $date->formatLocalized('%A') }}</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-xs-12">
                        <button type="submit" class="btn btn-info" id="btn-enr">Enregistrer</button>
                    </div>
                </div>

                <div class="row  margin-row">
                    <div class="col-md-3 col-xs-12 order-md-2">
                        <div class="image-hld">
                            <div class="image-de-profil" style="background-image: url({{ asset('thumbnails') . '/' . Auth::user()->image_name }}) !important">
                                <span id="newImageUploadTitle">Nouveau fichier choisi, cliquez sur le bouton Enregistrer pour télécharger une nouvelle image.</span>
                            </div>
                            <input type="file" class="thumbnail-input" id="thumbnail-input" name="thumb">
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12 order-md-1">
                        <div class="white-container-form text-col">
                            <div class="table-responsive">
                                    <table class="table table-sm table-hover">
                                        <tbody>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Nom</td>
                                            <td>
                                                <span>{{ Auth::user()->name }}</span>
                                                <input type="text" name="first_name" value="{{ Auth::user()->name }}">
                                            </td>
                                        </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Prénom</td>
                                            <td>
                                                <span>{{ Auth::user()->last_name }}</span>
                                                <input type="text" name="last_name" value="{{ Auth::user()->last_name }}">
                                            </td>
                                        </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Adresse</td>
                                            <td>
                                                <span>{{ Auth::user()->address }}</span>
                                                <input type="text" name="address" value="{{ Auth::user()->address }}">
                                            </td>
                                        </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Code Postal</td>
                                            <td>
                                                <span>{{ Auth::user()->postal_code }}</span>
                                                <input type="text" name="postal_code" value="{{ Auth::user()->postal_code }}">
                                            </td>
                                        </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Ville</td>
                                            <td>
                                                <span>{{ Auth::user()->city }}</span>
                                                <input type="text" name="city" value="{{ Auth::user()->city }}">
                                            </td>
                                        </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Date de naissance</td>
                                            <td>
                                                <span>{{ Carbon::parse(Auth::user()->birthday)->formatLocalized('%d/%m/%Y') }}</span>
                                                <input type="date" name="birthday" id="birthday" value="{{ Auth::user()->birthday }}">
                                            </td>
                                        </tr>
                                        {{----}}
                                        <tr class="no-hover">
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr class="no-hover">
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr class="no-hover">
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr class="no-hover">
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr class="no-hover">
                                            <td colspan="2"></td>
                                        </tr>
                                        {{----}}
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Poste</td>
                                            <td>
                                                <span>{{ Auth::user()->post }}</span>
                                                <input type="text" name="post" value="{{ Auth::user()->post }}">
                                            </td>
                                        </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Ancienneté</td>
                                            <td>
                                                <span>{{ Carbon::parse(Auth::user()->seniority)->formatLocalized('%d/%m/%Y') }}</span>
                                                <input type="date" name="seniority" id="seniority1" value="{{ Auth::user()->seniority }}">
                                            </td>
                                        </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Telephone fixe</td>
                                            <td>
                                                <span>{{ Auth::user()->phone }}</span>
                                                <input type="text" name="phone" value="{{ Auth::user()->phone }}">
                                            </td>
                                        </tr>
                                         <tr class="row-border" title="double click to edit">
                                             <td scope="row">Telephone portable</td>
                                             <td>
                                                 <span>{{ Auth::user()->cellphone }}</span>
                                                 <input type="text" name="cellphone" value="{{ Auth::user()->cellphone }}">
                                             </td>
                                         </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Email</td>
                                            <td>
                                                <span>{{ Auth::user()->email }}</span>
                                                <input type="text" name="email" value="{{ Auth::user()->email }}" disabled>
                                            </td>
                                        </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Année d’experiences</td>
                                            <td>
                                                <span>{{ Auth::user()->year_of_experience }}</span>
                                                <input type="text" name="year_of_experience" value="{{ Auth::user()->year_of_experience }}">
                                            </td>
                                        </tr>
                                        <tr class="row-border row-border-with-selectbox" title="double click to edit">
                                            <td scope="row">Anglais</td>
                                            <td>
                                                <span>{{  isset($englishOptions[Auth::user()->english]) ? $englishOptions[Auth::user()->english]['title'] : '' }}</span>
                                                <select class="table-select hide-from-form" id="languageSelectbox" name="english">
                                                    @foreach($englishOptions as $option)
                                                        <option {{ (isset(Auth::user()->english) && Auth::user()->english == $option['val']) ? 'selected' : '' }} value="{{ $option['val'] }}">{{ $option['title'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="row-border" title="double click to edit">
                                            <td scope="row">Autre langue</td>
                                            <td>
                                                <span>{{ Auth::user()->other_language }}</span>
                                                <input type="text" name="other_language" value="{{ Auth::user()->other_language }}">
                                            </td>
                                        </tr>
                                        <tr class="row-border row-border-with-radiobox" title="double click to edit">
                                            <td scope="row">En mission O/N</td>
                                            <td>
                                                <span>{{ Auth::user()->on_mission ? 'Oui' : 'Non' }}</span>
                                                <div class="form-group-check hide-from-form">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" {{ Auth::user()->on_mission ? 'checked' : '' }} type="radio" data-val="Oui" name="on_mission"
                                                               id="mission1" value="1">
                                                        <label class="form-check-label" for="mission1">Oui</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" {{ !Auth::user()->on_mission ? 'checked' : '' }} type="radio" data-val="Non" name="on_mission"
                                                               id="mission2" value="0">
                                                        <label class="form-check-label" for="mission2">Non</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="home-row-border" title="double click to edit">
                                            <td scope="row">Commentaires</td>
                                            <td>
                                                <span>{{ Auth::user()->comments }}</span>
                                                <input type="text" name="comments" value="{{ Auth::user()->comments }}">
                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

    @include('partials.resumes.resume-' . $settings->template)
    @include('message')
@endsection
