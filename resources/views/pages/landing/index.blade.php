@extends('layouts.app')

@section('main') active @endsection

@section('content')
    @include('pages.landing.blocks.hero')
    @include('pages.landing.blocks.why-choose')
    @include('pages.landing.blocks.product')
    @include('pages.landing.blocks.we-help')
    @include('pages.landing.blocks.testimonial')
    @include('pages.landing.blocks.blog')
@endsection
