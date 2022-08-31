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
        <div class="content">
            <p class="uppercase text-center my-6 font-semibold text-[#0C517F] text-xl">{{__('кто мы')}}?</p>
            <div class="dots text-center">
                <span> &#9642;</span>
                <span> &#9642;</span>
                <span> &#9642;</span>
            </div>
            <p class="font-semibold text-center text-[#0C517F]">{{$staticPart->who_am_i}}</p>
        </div>
        <div class="content">
            <p class="uppercase text-center my-6 font-semibold text-[#0C517F] text-xl">{{__('наши предложения')}}?</p>
            <div class="dots text-center mb-4">
                <span> &#9642;</span>
                <span> &#9642;</span>
                <span> &#9642;</span>
            </div>
            <div class="offers grid grid-cols-2 gap-4 md:grid-cols-4">
                @include('components.our-offers.item', ['path' => asset('assets/images/offers/01.svg'), 'name' => __('Заграничные туры')])
                @include('components.our-offers.item', ['path' => asset('assets/images/offers/02.svg'), 'name' => __('Внутренние туры')])
                @include('components.our-offers.item', ['path' => asset('assets/images/offers/03.svg'), 'name' => __('Лечебные туры')])
                @include('components.our-offers.item', ['path' => asset('assets/images/offers/04.svg'), 'name' => __('Транспортные услуги')])
                @include('components.our-offers.item', ['path' => asset('assets/images/offers/05.svg'), 'name' => __('Встреча гостей')])
                @include('components.our-offers.item', ['path' => asset('assets/images/offers/06.svg'), 'name' => __('Резервация отелей')])
                @include('components.our-offers.item', ['path' => asset('assets/images/offers/07.svg'), 'name' => __('Оформление Визы')])
                @include('components.our-offers.item', ['path' => asset('assets/images/offers/08.svg'), 'name' => __('VIP-услуги')])
            </div>
        </div>
    </div>
</section>
</body>
</html>
