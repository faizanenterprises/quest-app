@extends('layouts.master')

@section('content')



<main class="wrapper">


    @include('partials.index-slider')

    @include('partials.index-features')

    @include('partials.index-service-carousel')

    @include('partials.index-aboutcompany')

    @include('partials.index-countrylist')

    @include('partials.index-whychoose')

    @include('partials.index-funfacts')

    @include('partials.index-faq')

    @include('partials.index-radialprogress')

    {{-- @include('partials.index-testimonials')

    @include('partials.index-clientslogo') --}}

    @include('partials.index-bloggrid')

</main>

@endsection
