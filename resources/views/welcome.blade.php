<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body class="">
<div class="content">
    @include('layouts/header')
</div>
@include('slider')
<section class="about">
    <div class="px-8 relative content -translate-y-6 z-20
         md:px-0">
        <div class="service drop-shadow-lg py-2 grid grid-cols-2 gap-4
         bg-[#0C517F] text-xs text-white text-center rounded-lg
         md:flex md:justify-between md:px-20 md:py-8">
            <div class="service-item flex gap-2 justify-center">
                <img src="{{asset('assets/images/service/01.svg')}}" alt="">
                <p class="uppercase">{{__('100+ İSTİQAMƏTLƏR')}}</p>
            </div>
            <div class="service-item flex gap-2 justify-center">
                <img src="{{asset('assets/images/service/02.svg')}}" alt="">
                <p class="uppercase">{{__('SƏRFƏLİ QİYMƏTLƏR ')}}</p>
            </div>
            <div class="service-item flex gap-2 justify-center">
                <img src="{{asset('assets/images/service/03.svg')}}" alt="">
                <p class="uppercase">{{__('SƏRFƏLİ QİYMƏTLƏR')}}</p>
            </div>
            <div class="service-item flex gap-2 justify-center">
                <img src="{{asset('assets/images/service/03.svg')}}" alt="">
                <p class="uppercase">{{__('TƏHLÜKƏSİZ ÖDƏNİŞ')}}</p>
            </div>
        </div>
        <div class="content px-8">
            <p class="uppercase text-center my-6 font-semibold text-[#0C517F] text-xl">{{__('кто мы')}}?</p>
            <div class="dots text-center">
                <span> &#9642;</span>
                <span> &#9642;</span>
                <span> &#9642;</span>
            </div>
            <p class="font-semibold text-[#0C517F]">{{$staticPart->who_am_i}}</p>
        </div>
    </div>
</section>
</body>
</html>
