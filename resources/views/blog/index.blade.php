@extends('layout')

@section('content')

    <h1 class="title">The Blog</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 posts">
                <ul class="list-unstyled">
                @foreach ($articles as $article)
                    <li>
                        <h4><a href="/blog/{{ $article['url'] }}">{{ $article['title'] }}</a></h4>{!! $article['intro'] !!}
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection