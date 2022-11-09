<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

@if($settings->template == 1)
    @include('partials.resumes.resume-1-downloadable')
@elseif($settings->template == 5)
    @include('partials.resumes.resume-5-downloadable')
@else
    @include('partials.resumes.resume-' . $settings->template)
@endif
