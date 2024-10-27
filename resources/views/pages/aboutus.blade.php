@extends('layouts.master')

@section('content')

<main class="wrapper">

    @include('partials.about-carousel')

    @include('partials.about-intro')

    @include('partials.about-company')

    {{-- @include('partials.about-team')

    @include('partials.about-funfacts') --}}

    {{-- @include('partials.about-workprocess')

    @include('partials.about-testimonials') --}}


</main>

@endsection
