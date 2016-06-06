@extends('app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <a href="#"><h1>@{{ items.data }}</h1></a>
            <p></p>
        </div>
    </div>
    @include('partials.scripts')
@endsection