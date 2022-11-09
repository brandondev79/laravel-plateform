@if(!isset($downloading) && !isset($fromOtherView))
    <script>
        var skillsVar = [{{ implode(',', $userSkills) }}];
    </script>
@endif

<style type="text/css">
    .headline-1 {
        color: #000000;
        font-size: 19px;
    }

    .headline-2 {
        color: #000000;
        font-size: 19px;
    }

    .section {
        width: 80%;
        margin: auto;
        margin-bottom: 25px;
    }

    .colored-title {
        padding: 15px;
        background: #0090CC;
        text-align: center;
        color: white;
        font-size: 16px;
        font-weight: bold;
    }

    .list-block {
        padding-top: 25px;
        font-size: 12px;
        padding-left: 40px;
    }

    .list-item {
        padding-bottom: 7px;
    }

    .top-block {
        width: 80%;
        margin: auto;
        outline: 2px solid #707070;
        margin-bottom: 50px;
    }

    .top-block-left {
        font-size: 14px;
    }

    .top-block-right {
        color: #AAAAAA;
        font-size: 16px;
    }

    .top-block table {
        width: 100%;
    }

    .top-block table td {
        padding: 15px 20px 20px 20px;
    }

    .top-block table tr td.top-block-right {
        text-align: right;
    }

    .experiences-main-container {
        width: 80%;
        margin: auto;
        margin-top: 35px;
    }

    .experiences-table {
        width: 100%;
        margin-bottom: 24px;
    }

    .experiences-title {
        font-size: 19px;
        width: 18%;
        padding-right: 20px;
    }

    .blue-line {
        background: #0090CC;
        height: 8px;
        width: 100%;
    }

    .experience-title {
        color: #707070;
        font-size: 19px;
        padding-bottom: 8px;
    }

    .experience-date {
        color: #9d9d9d;
        font-size: 15px;
    }

    .experience-line-devider {
        width: 100%;
        height: 2px;
        background: #B3B3B3;
        margin-top: 20px;
        margin-bottom: 40px;
    }

    .experience-content-title {
        color: #AAAAAA;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .experience-container {
        margin-bottom: 50px;
    }

    .experience-content {
        padding-bottom: 20px;
        font-size: 12px;
    }

    .other-info {

    }

    .other-info-title {
        font-size: 20px;
        color: #AAAAAA;
        padding-bottom: 20px;
    }

    .other-info-comment {
        font-size: 12px;
    }

    .resume-3-container {
        padding-top: 50px;
        text-align: left;
    }

    .download-container {
        text-align: center;
        padding-top: 50px;
        background-color: rgba(55, 87, 119, 0.45);
        height: 100%;
        width: 100%;
        position: absolute;
        z-index: 999;
        display: none;
    }

    .download-container > a {
        padding: 15px;
        border-radius: 3px;
        position:absolute;
        top:20%;
        left:50%;
        transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%);
        background: white;
    }

    .row-center {
        text-align: center;
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
    header-profile
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
@if(!isset($fromOtherView))
    <div class="back-white res-main-cont">
        <div class="download-container" id="downladContainerOverlay">
            <a href="/pdf-download" class="download-button"><i class="fa fa-download"></i> Telecharger en pdf</a>
        </div>
    @endif
        <div class="row-center">
            <img src="{{ !isset($downloading) ? url('/img/logo.png') : base_path() . '/public/img/logo.png' }}" height="32" class="img-responsive logo-style-doc">
        </div>
    <div class="container resume-3-container">

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

        <div class="top-block">
            <table>
                <tr>
                    <td class="top-block-left">
                        <h1 class="headline-1">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h1>
                        {{ Auth::user()->email }}
                    </td>
                    <td class="top-block-right">
                        <h1 class="headline-2">{{ Auth::user()->post }}</h1>
                        {{ Auth::user()->year_of_experience }}  ans d'experience
                    </td>
                </tr>
            </table>
        </div>

        <?php
        $hasFormations = false;
        $hasCertifications = false;
        foreach ($userFormations as $formation) {
            if($formation->type == 2) {
                $hasFormations = true;
            }
            if($formation->type == 1) {
                $hasCertifications = true;
            }
        }
        ?>

        @if(sizeof($userFormations) && $hasFormations)
        <div class="section">
            <div class="colored-title">FORMATIONS</div>
            <div class="list-block">
                @foreach($userFormations as $formation)
                    @if($formation->type == 2)<div class="list-item"> {{ $formation->year }}: {{ $formation->facility_name }}, {{ $formation->formation_name }}</div> @endif
                @endforeach
            </div>
        </div>
        @endif

        @if(sizeof($userFormations) && $hasCertifications)
        <div class="section">
            <div class="colored-title">CERTIFICATIONS</div>
            <div class="list-block">
                @foreach($userFormations as $formation)
                    @if($formation->type == 1)<div class="list-item"> {{ $formation->year }}: {{ $formation->facility_name }}, {{ $formation->formation_name }}</div> @endif
                @endforeach
            </div>
        </div>
        @endif

        @if(sizeof($resumeSkills))
        <div class="section">
            <div class="colored-title">COMPETENCES</div>
            <div class="list-block">
                @foreach($resumeSkills as $skill)
                    <div class="list-item">{{ $skill->category }}: {{ $skill->skill }}</div>
                @endforeach
            </div>
        </div>
        @endif

        @if(sizeof($userMissions))
        <div class="experiences-main-container">
            <table class="experiences-table">
                <tr>
                    <td class="experiences-title">EXPERIENCES</td>
                    <td><div class="blue-line"></div></td>
                </tr>
            </table>
            @foreach($userMissions as $mission)
                <div class="experience-container">
                    <div class="experience-title">{{ $mission->customer }}</div>
                    <div class="experience-date">
                        {{  Carbon::parse($mission->period_start)->formatLocalized('%b %Y') }} -
                        {{ Carbon::now() < Carbon::parse($mission->period_end) ?
                            'à Aujourd\'hui' :
                                Carbon::parse($mission->period_end)->formatLocalized('%b %Y') }}
                    </div>
                    <div class="experience-line-devider"></div>
                    <div class="experience-content">
                        <div class="experience-content-title">{{ $mission->position }}</div>
                        <div class="experience-content" style="white-space: pre">{{ $mission->description }}</div>
                    </div>
                    <div class="other-info">
                        <div class="other-info-title">Environnement</div>
                        <div class="other-info-comment">{{ $mission->environment }} </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif

        @if(!isset($downloading))
            {{--<div class="download-container">
                <a href="/pdf-download" class="download-button"><i class="fa fa-download"></i> Telecharger en pdf</a>
            </div>--}}
        @endif
    </div>

    @if(!isset($fromOtherView))</div>@endif
