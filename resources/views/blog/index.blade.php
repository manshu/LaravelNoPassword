@extends('app')
@section('content')
<div class="container" v-for="post in posts.data">
    <a href="@{{ post.title }}"><h1>@{{ post.title }}</h1></a>
    <p>@{{ post.body }}</p>
</div>
@endsection