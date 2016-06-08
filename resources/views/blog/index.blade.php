@extends('app')
@section('content')
<div class="container">
        <div class="col-md-12" v-for="post in items" track-by="$index">
            <a href="@{{ post.slug }}"><h1>@{{ post.title }}</h1></a>
            <p>@{{ post.body }}</p>
        </div>
        <div class="row">
                <ul class="pagination">
                    <li v-if="pagination.current_page > 1">
                        <a href="#" aria-label="Previous"
                           @click.prevent="changePage(pagination.current_page - 1)">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li v-for="page in pagesNumber"
                        v-bind:class="[ page == isActived ? 'active' : '']">
                        <a href="#"
                           @click.prevent="changePage(page)">@{{ page }}</a>
                    </li>
                    <li v-if="pagination.current_page < pagination.last_page">
                        <a href="#" aria-label="Next"
                           @click.prevent="changePage(pagination.current_page + 1)">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
        </div>
</div>
    @include('partials.scripts')
    <script src="{{ url('js/app.js') }}"></script>
@endsection