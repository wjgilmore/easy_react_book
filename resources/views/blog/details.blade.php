@extends('layout')

@section('title', $article['title'].' - ')

@section('content')

    <h1 class="title">{{ $article['title'] }}</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 details">

                <p>
                <em>The following blog post is an adapted excerpt from the forthcoming book, "Easy React: Build Powerful Web Apps Using Modern JavaScript Technologies", by W. Jason Gilmore. See the <a href="/toc">table of contents</a> to read the introduction and chapter 1 online for free!</em>
                </p>

                {!! $article['content'] !!}

                <div class="author">
                    <hr/>
                    <p class="alternate"><em>Written by {{ $article['author'] }} on {{ $article['date']->format("M d, Y") }}</em></p>
                </div>
            </div>
        </div>
    </div>

@endsection
