@extends('layout')

@section('title', $article['title'].' - ')

@section('content')

    <h1 class="title">{{ $article['title'] }}</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 details">
                {!! $article['content'] !!}

                <div class="author">
                    <hr/>
                    <p class="alternate"><em>Written by {{ $article['author'] }} on {{ $article['date']->format("M d, Y") }}</em></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center" style="margin-top: 30px;">
        <div class="row">
            <div class="col-sm-12">
                <p class="lead alternate m20">What are you waiting for? Start implementing Stripe and Laravel today!</p>
                <p class="purchase-cta-btn">
                    <a onclick="_gaq.push(['_trackEvent', 'Products', 'Outbound', 'Leanpub']);" href="https://leanpub.com/easyecommerce" class="btn btn-lg btn-primary"><strong>Buy Now for</strong> $34.00</a>
                </p>
                    <p class="purchase-cta-btn" style="font-size: 0.75em;">
    European customers: Leanpub will add VAT to the purchase price.
    </p>
            </div>
        </div>
    </div>

@endsection
