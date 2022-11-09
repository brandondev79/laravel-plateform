@extends('company.layouts.app')
@section('content')
    <!-- Navigation -->
    <div class="row">
        <div class="col grid-margin">
            <ul class="list-inline search-suggestion">
                <li class="list-inline-item search-item">L’entreprise</li>
                <li class="list-inline-item search-item">Les admins</li>
                <li class="list-inline-item search-item">Les commerciaux</li>
                <li class="list-inline-item search-item">Les employés / candidats</li>
                <li class="list-inline-item search-item">Paiements</li>
            </ul>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="row">
        <div class="col grid-margin">
            <div class="card card-enterprise">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                <tr>
                                    <td class="pl-0 align-middle">Logo de l'enteprise</td>
                                    <td class="pr-0">
                                        <img src="{{ URL::asset('img/logo-pearsonfrank-2x.png') }}" alt="logo pearson frank ">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Nom de l’entreprise</td>
                                    <td class="pr-0">Pearson Frank</td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Adresse</td>
                                    <td class="pr-0">
                                        <p>14 rue de l’annonciation</p>
                                        <p>75016</p>
                                        <p>Paris</p>
                                        <p>France</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">SIREN</td>
                                    <td class="pr-0">803184773</td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Nombre d’admins</td>
                                    <td class="pr-0">4</td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Nombre de commerciaux</td>
                                    <td class="pr-0">12</td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Formule</td>
                                    <td class="pr-0">Moins de 100 collaborateurs</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-flex align-items-center flex-wrap text-right">
                            <img class="hide-on-md" src="{{ URL::asset('img/27-layers.png') }}" alt="the man sit on the chair">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection