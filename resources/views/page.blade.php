@extends('layouts.site')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">{{$header}}</h1>
        <p>{{$message}}</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4">
                <h2>{{$article->title}}</h2>
                <p>{{$article->desc1}}</p>
                <p><a class="btn btn-secondary" href="#" role="button">Подробнее &raquo;</a></p>
            </div>
        @endforeach
    </div>

    <hr>

    <footer>
        <p>&copy; Company 2017</p>
    </footer>
</div>
@endsection