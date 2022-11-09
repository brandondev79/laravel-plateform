<link rel="stylesheet" media="screen" href="{{ public_path('css/panel.css') }}">
<div class="card card-no-border">
    <div class="card-body">
        <p class="mt-5 mb-5 text-center">
            <img src="{{ public_path('img/logo.png') }}" alt="pearsonfrak">
        </p>
        <p class="mb-5 text-center" style="font-size: 16px;">{{ Auth::user()->post }}</p>
        <p class="mb-5 text-center" style="font-size: 11px; color: #707070; color: #707070; opacity: 0.8;">
            {{ Auth::user()->year_of_experience ?? 0 }} ans d'expériences
        </p>

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
            <div class="card card-technique card-square mb-5">
                <div class="card-body">
                    <div class="technique-headline">
                        <span class="badge text-center badge-theme-lime-03">Formations</span>
                    </div>
                    <div class="technique-detail">
                        @foreach($userFormations as $formation)
                            @if($formation->type == 2)
                                <p>
                                    <span class="technique-title">{{ $formation->year }}</span>
                                    <span class="technique-content ml-4">
                                                {{ $formation->facility_name }}, {{ $formation->formation_name }}
                                            </span>
                                </p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if(sizeof($userFormations) && $hasCertifications)
            <div class="card card-technique card-square mb-5">
                <div class="card-body">
                    <div class="technique-headline">
                        <span class="badge text-center badge-pill badge-theme-violet-03">Certifications</span>
                    </div>
                    <div class="technique-detail">
                        @foreach($userFormations as $formation)
                            @if($formation->type == 1)
                                <p>
                                    <span class="technique-title">{{ $formation->year }}</span>
                                    <span class="technique-content ml-4">
                                                {{ $formation->facility_name }}, {{ $formation->formation_name }}
                                            </span>
                                </p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if(sizeof($resumeSkills))
            <div class="card card-technique card-square mb-5">
                <div class="card-body">
                    <div class="technique-headline">
                        <span class="badge text-center badge-pill badge-theme-lemon-03">Competences</span>
                    </div>
                    <div class="technique-detail">
                        @foreach($resumeSkills as $skill)
                            <p>
                                <span class="technique-title">{{ $skill->category }}</span>
                                <span class="technique-content ml-4">{{ $skill->skill }}</span>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if(sizeof($userMissions))
            <div class="card card-technique card-square mb-5">
                <div class="card-body">
                    <div class="technique-headline">
                        <span class="text-headline text-center mb-4">Expériences</span>
                    </div>
                    <div class="technique-detail">
                        @foreach($userMissions as $mission)
                            <div class="company">
                                <img class="company-logo" src="{{ public_path('img/'.company_name($mission->customer).'.png') }}" alt="avatar">
                                <div class="ml-4">
                                    @if(is_now($mission->period_end))
                                        <p>{{ $mission->customer }} - {{ date_string($mission->period_start) }} - à Aujourd'hui </p>
                                    @else
                                        <p>{{ $mission->customer }} - {{ date_string($mission->period_start) }} - {{ date_string($mission->period_end) }}</p>
                                    @endif
                                    <p>{{ $mission->position }}</p>
                                    <p class="text-subtitle">{{ $mission->environment }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>