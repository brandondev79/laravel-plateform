<style type="text/css">
    body, html {
        margin: 0;
        padding: 50px;
        padding-top: 0;
        font-family: 'Lato', "Helvetica Neue", Arial, sans-serif;
        color: #212529;
    }

    .blue-span p {
        margin: 0;
        padding: 0;
        margin-bottom: 5px;
    }

    .blue-span {
        background: #2f76ec;
        color: #000000;
        text-align: center;
        display: block;
        font-size: 25px;
        padding: 15px;
        line-height: 1;
        font-weight: 600;
        letter-spacing: 1px;
        font-weight: bold;
    }


    h1 {
        font-size: 22px;
        text-align: center;
        font-weight: 600;
    }

    table {
        width: 100%;
    }

    td {
        min-height: 65px;
        font-size: 16px;
        font-weight: 600;
        border: 1px solid #dee2e6;
    }

    tr > td.first {
        padding: 15px;
    }

    tr > td.second {
        padding: 15px;
        padding-top: 0;
    }

    .blue-line {
        background: #FF876B;
        height: 8px;
        width: 100%;
        margin-left: 20px;
    }

    /* top new block start */
    .top-new-block > div.blue-line {
        width: 80%;
        margin: auto;
    }

    .tnb-toplist {
        margin: auto;
        width: 80%;
        padding-top: 30px;
        padding-bottom: 30px;
        font-size: 17px;
        color: #6a6b6b;
    }

    .tnb-list-item {
        padding-bottom: 4px;
    }

    .gray-line {
        background: #b4b7b9;
        height: 3px;
        width: 80%;
        margin: auto;
    }

    .tnb-table {
        width: 80%;
        margin: auto;
        margin-top: 40px;
        font-size: 17px;
        page-break-after: always;
        border: none;
    }

    .tnb-table tr {
        padding-bottom: 5px;
    }

    .tnb-table td {
        border: none !important;
    }

    .tnd-table-t1 {
        width: 30%;
        color: #6a6b6b;
    }

    .tnd-table-t2 {
        width: 70%;
    }

    .dot-td{
        height: 15px;
        width: 15px;
        border-radius: 50%;
        display: inline-block;
        margin-top: 5px;
        text-align: left;
    }

    .red{
        background-color: #d03f3f;
    }
    .yellow{
        background-color: #f5a623;
    }
    .green{
        background-color: #7ed321;
    }


    /* top new block end */
</style>

<div style="padding-top: 30px; padding-bottom: 30px">
    <img src="{{ base_path() . '/public/img/logo.jpg' }}" height="32" class="top-add-image">
</div>

@if(isset($downloading))
    <div class="top-new-block">
        <div class="blue-line"></div>
        <div class="tnb-toplist">
            <div class="tnb-list-item" style="font-weight: bold">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</div>
            <div class="tnb-list-item">{{ Auth::user()->phone }}</div>
            <div class="tnb-list-item">{{ Auth::user()->email }}</div>
        </div>
        <div class="gray-line"></div>
        <table class="tnb-table">
            <tr>
                <td class="tnd-table-t1">Candidate Ref:</td>
                <td class="tnd-table-t2">AP-0101</td>
            </tr>
            <tr>
                <td class="tnd-table-t1">Location:</td>
                <td class="tnd-table-t2">{{ $resumeUser->city }}</td>
            </tr>
            <tr>
                <td class="tnd-table-t1">Disponibilité:</td>
                <td class="tnd-table-t2"><span class="dot-td {{ $resumeUser->circleColor() }}"></span></td>
            </tr>
            <tr>
                <td class="tnd-table-t1">Poste:</td>
                <td class="tnd-table-t2">{{ $resumeUser->post }}</td>
            </tr>
            <tr>
                <td class="tnd-table-t1">Expérience:</td>
                <td class="tnd-table-t2">{{ $resumeUser->year_of_experience }}  ans d'experience</td>
            </tr>
        </table>
    </div>
@endif
@if(isset($downloading))
<div style="width: 100%; height: 50px;"></div>
@endif
<div>
    <div class="blue-span">
        <p>{{ $resumeUser->name }} {{ $resumeUser->last_name }}</p>
        <span>{{ $resumeUser->post }} {{ $resumeUser->year_of_experience }}  ans d'experiences</span>
    </div>
</div>

@if(sizeof($resumeSkills))
<h1>Competences techniques</h1>
<table cellspacing="0">
    @foreach($resumeSkills as $skill)
        <tr>
            <td class="first">{{ $skill->category }}</td>
            <td class="second">{{ $skill->skill }}</td>
        </tr>
    @endforeach
</table>
@endif

@if(sizeof($userMissions))
<h1>Missions</h1>
<table cellspacing="0">
    @foreach($userMissions as $mission)
        <tr>
            <td class="first"> {{  Carbon::parse($mission->period_start)->formatLocalized('%b %Y') }} -
                {{ Carbon::now() < Carbon::parse($mission->period_end) ?
                    'Ã  Aujourd\'hui' :
                        Carbon::parse($mission->period_end)->formatLocalized('%b %Y') }}</td>
            <td class="second"> {{ $mission->customer }}, {{ $mission->position }}, {{ $mission->description }}, {{ $mission->environment }}</td>
        </tr>
    @endforeach
</table>
@endif

@if(sizeof($userFormations))
<h1>Formations</h1>
<table cellspacing="0">
    @foreach($userFormations as $formation)
        <tr>
            <td class="first">{{ $formation->year }}</td>
            <td class="second">{{ $formationTypes[$formation->type] }}, {{ $formation->name }}</td>
        </tr>
    @endforeach
</table>
@endif
