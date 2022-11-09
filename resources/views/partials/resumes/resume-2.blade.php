@if(!isset($downloading) && !isset($fromOtherView))
    <script>
        var skillsVar = [{{ implode(',', $userSkills) }}];
    </script>
@endif

<style type="text/css">
    .resume-2-container {
        padding-top: 70px;
        position: relative;
        padding-bottom: 50px;
    }
    .headline-1 {
        color: #4A4A4A;
        font-size: 18px;
        text-align: center;
    }

    .headline-2 {
        color: #AAAAAA;
        font-size: 18px;
        line-height: 25px;
        text-align: center;
    }

    .section {
        width: 80%;
        margin: auto;
    }

    .orange-title {
        padding: 15px;
        background: #FF876B;
        text-align: center;
        color: white;
        font-size: 16px;
        font-weight: bold;
    }

    .border-rounded-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .border-rounded-bottom {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .list-block {
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
        font-size: 12px;
        color: #222222;
        line-height: 32px;
    }

    .section {
        margin-bottom: 20px;
    }

    .long-line-height .list-item {
        padding-bottom: 0px;
    }

    .no-background {
        background: none;
        color: #4A4A4A;
        padding-bottom: 10px;
    }

    .less-padding {
        padding-top: 0px;
    }

    .devider-line {
        background: #E6E6E6;
        width: 100%;
        height: 3px;
        margin-bottom: 30px;
    }

    .font16 {
        font-size: 16px;
    }

   .resume2-bottom-img {
       position: relative;
       bottom: 0;
       left: 0;
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
        top:30%;
        left:50%;
        transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%);
        background: white;
    }

    .top-add-image {
            position: absolute;
        @if(!isset($downloading))
            right: 20px;
            top: 6px;
        @else
            right: 100px;
            top: -9px;
        @endif
    }
    @if(!isset($downloading))
   .resume2-bottom-img {
        position: absolute;
        bottom: -100px;
        left: 0;
    }
    @endif
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


    .blue-line {
        background: #FF876B;
        height: 8px;
        width: 100%;
        margin-left: 20px;
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
        <div class="row-center resume2-top-img" style="text-align: center">
            <img src="{{ !isset($downloading) ?  url('/img/resume2-top-img.jpg') : base_path() . '/public/img/resume2-top-img.jpg' }}" class="top-add-image">
            <div style="text-align: center">
                <img src="{{ !isset($downloading) ? url('/img/logo.png') : base_path() . '/public/img/logo.png' }}" class="img-responsive logo-style-doc">
            </div>

        </div>
<div class="resume-2-container">

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

    <h1 class="headline-1">{{ $resumeUser->name }} {{ $resumeUser->last_name }}</h1>
    <h1 class="headline-2">
        {{ $resumeUser->post }} <br> {{ $resumeUser->year_of_experience }}  ans d'experience <br>
    </h1>

    @if(sizeof($resumeSkills))
    <div class="section">
        <div class="orange-title border-rounded-top">Compétences techniques</div>
        <div class="list-block">
            @foreach($resumeSkills as $skill)
                {{ $skill->category }}: {{ $skill->skill }} <br>
            @endforeach
        </div>
    </div>
    @endif

    @if(sizeof($userMissions))
    <div class="section">
        <div class="orange-title border-rounded-bottom">Missions</div>
        <div class="list-block long-line-height">
            @foreach($userMissions as $mission)
                <div class="list-item">
                    {{  Carbon::parse($mission->period_start)->formatLocalized('%b %Y') }} -
                    {{ Carbon::now() < Carbon::parse($mission->period_end) ?
                        'à Aujourd\'hui' :
                            Carbon::parse($mission->period_end)->formatLocalized('%b %Y') }}:
                    {{ $mission->customer }}, {{ $mission->position }}, {{ $mission->description }}, {{ $mission->environment }}
                </div>
            @endforeach
        </div>
    </div>
    @endif

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


    @if(sizeof($userFormations) && $hasCertifications)
    <div class="devider-line"></div>
    <div class="section">
        <div class="orange-title no-background font16">Certifications</div>
        <div class="list-block long-line-height less-padding">
            @foreach($userFormations as $formation)
                @if($formation->type == 1)<div class="list-item"> {{ $formation->year }}: {{ $formation->facility_name }}, {{ $formation->formation_name }}</div> @endif
            @endforeach
        </div>
    </div>
    @endif

    @if(sizeof($userFormations) && $hasFormations)
    <div class="devider-line"></div>
    <div class="section">
        <div class="orange-title no-background font16">Formations</div>
        <div class="list-block long-line-height less-padding">
            @foreach($userFormations as $formation)
                @if($formation->type == 2)<div class="list-item"> {{ $formation->year }}: {{ $formation->facility_name }}, {{ $formation->formation_name }}</div> @endif
            @endforeach
        </div>
    </div>
    @endif

    @if(!isset($downloading) && !isset($fromOtherView))
       {{--<div class="download-container"> <a href="/pdf-download" class="download-button"><i class="fa fa-download"></i> Telecharger en pdf</a></div>--}}
    @endif

    <img src="{{ !isset($downloading) ?
                    url('/img/resume2-bottom-img.png') :
                    base_path() . '/public/img/resume2-bottom-img.jpg' }}" class="resume2-bottom-img">
</div>
@if(!isset($fromOtherView))</div>@endif
