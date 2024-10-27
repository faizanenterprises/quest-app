@extends('layouts.master')

@section('content')
    <main class="wrapper">
        {{-- Page Header --}}
        <div class="wptb-page-heading"
            style="background-image: url({{ asset('questapp/assets/img/background/page-header-bg.jpg') }});">
            <div class="container">
                <div class="wptb-item--inner">
                    <h2 class="wptb-item--title ">SINP Calculator</h2>
                    <div class="wptb-breadcrumb-wrap">
                        <ul class="wptb-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><span>SINP Calculator</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center"> <!-- Center the card horizontally -->
                <div class="col-md-6"> <!-- Adjust the column width for responsiveness -->
                    <div class="card text-center" style="margin-top: 50px;"> <!-- Center the text and add margin-top -->
                        <div class="card-body">
                            <h2>Your SINP Points</h2>
                            <p>Total Points: {{ $totalPoints }}</p>

                            @if ($totalPoints >= 60)
                                <p>Congratulations! You may qualify for the SINP.</p>
                            @else
                                <p>Unfortunately, your score is below the required threshold.</p>
                            @endif

                            <a href="{{ route('sinp.calculator') }}" class="btn btn-secondary mt-3">Calculate Again</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
