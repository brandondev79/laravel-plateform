<style>
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
</style>

@if(!isset($downloading) && !isset($fromOtherView))
    <script>
        var skillsVar = [{{ implode(',', $userSkills) }}];
    </script>
@endif
@if(!isset($fromOtherView))
    <div class="back-white res-main-cont">
        <div class="download-container" id="downladContainerOverlay">
            <a href="/pdf-download" class="download-button"><i class="fa fa-download"></i> Telecharger en pdf</a>
        </div>
    @endif
    @if(!isset($downloading)&& !isset($fromOtherView))
        <div class="row-center">
            <img src="../img/logo.png" class="img-responsive logo-style-doc">
        </div>
    @endif
    @if(isset($fromOtherView))
        <div style="width: 100px; height: 20px;"></div>
    @endif
    <div class="row-center">
        <div class="col-md-12 blue-span">
            <p>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>
            <span>{{ Auth::user()->post }} {{ Auth::user()->year_of_experience }}  ans d'experience</span>
        </div>
    </div>

    @if(sizeof($resumeSkills))
        <div class="row">
            <div class="col-md-12 title-span">
                <span>Competences techniques</span>
            </div>
        </div>
        @foreach($resumeSkills as $skill)
            <div class="row row-center">
                <div class="col-md-4 table-bordered text-table">
                    {{ $skill->category }}
                </div>
                <div class="col-md-8 table-bordered text-table-desc">
                    {{ $skill->skill }}
                </div>
            </div>
        @endforeach
    @endif

    @if(sizeof($userMissions))
        <div class="row row-center">
            <div class="col-md-12 title-span">
                <span>Missions</span>
            </div>
        </div>
        @foreach($userMissions as $mission)
            <div class="row row-center">
                <div class="col-md-4 table-bordered text-table">
                    {{  Carbon::parse($mission->period_start)->formatLocalized('%b %Y') }} -
                    {{ Carbon::now() < Carbon::parse($mission->period_end) ?
                        'à Aujourd\'hui' :
                            Carbon::parse($mission->period_end)->formatLocalized('%b %Y') }}
                </div>
                <div class="col-md-8 table-bordered text-table-desc">
                    {{ $mission->customer }}, {{ $mission->position }}, {{ $mission->description }}, {{ $mission->environment }}
                </div>
            </div>
        @endforeach
    @endif

    @if(sizeof($userFormations))
        <div class="row row-center">
            <div class="col-md-12 title-span">
                <span>Formations</span>
            </div>
        </div>
        @foreach($userFormations as $formation)
            <div class="row row-center">
                <div class="col-md-4 table-bordered text-table">
                    {{ $formation->year }}
                </div>
                <div class="col-md-8 table-bordered text-table-desc">
                    {{ $formationTypes[$formation->type] }}, {{ $formation->name }}
                </div>
            </div>
        @endforeach
    @endif


    @if(!isset($downloading) && !isset($fromOtherView))
        <div class="download-container"> <a href="/pdf-download" class="download-button"><i class="fa fa-download"></i> Telecharger en pdf</a></div>
    @endif

@if(!isset($fromOtherView))</div>@endif

