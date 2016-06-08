@extends('app')
@section('content')
    <div class="container">
        <div class="col-md-12" id="post">
            <a href="#"><h1>@{{ message }}</h1></a>
            <p></p>
        </div>
    </div>
    @include('partials.scripts')
    <script src="{{ url('js/vueapp.js') }}"></script>
@endsection