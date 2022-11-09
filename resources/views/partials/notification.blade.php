@if(session('message'))
    <script>
        toastr.info("{{session('message')}}", 'Info');
    </script>
@endif

@if($errors->any())
    <script>
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}", 'Error');
        @endforeach
    </script>
@endif