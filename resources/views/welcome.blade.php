@extends('layouts.main')
@section('main', 'active')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Shavkat Mirziyoyev:</h4>
                <h1 class="display-3 font-weight-bold text-white">"Maktabgacha ta'lim sohasida zamonaviy tizim yaratish muhim
                    vazifamizdir"</h1>
                <!-- <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                        Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                        lorem dolore sed stet et est justo dolore.</p> -->
                <!-- <a href="" class="btn btn-secondary mt-1 py-3 px-5">Ko'proq ma'lumot olish</a> -->
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="/assets/img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->

    @include('section.facility')

    <!-- Facilities Start -->


    <!-- About Start -->

    @include('section.about')

    <!-- About End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning sinflar</span></p>
                <h1 class="mb-4">Farzandlaringiz uchun gruhni tanlang</h1>
            </div>

            @include('section.group')

        </div>
    </div>
    <!-- Class End -->


    <!-- Registration Start -->

    @include('section.registr')

    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
                <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
            </div>

            @include('section.teachers')

        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->

    @include('section.test')

    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bog'cha hayoti</span></p>
                <h1 class="mb-4">So'nggi maqolalar</h1>
            </div>
            <div class="row pb-3">

                @include('section.blog')

            </div>
        </div>
    </div>
    <!-- Blog End -->


@endsection
