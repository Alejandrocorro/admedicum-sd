@extends('layouts.app')

@section('content')
@include('pages.home.hero')
@include('pages.home.about-us')
@include('pages.home.our-solutions')
@include('pages.home.our-values')
@include('pages.home.testimonials')
@include('pages.home.about-us2')
@include('pages.home.contact')
@include('pages.home.our-blog')


{{-- {!!do_shortcode('[mybooking_rent_engine_product_listing]')!!} --}}

@endsection