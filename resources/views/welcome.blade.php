<!doctype html>
<html>
<body class="">
@include('layouts.head')
@include('layouts/header')
@include('slider')
<section class="about bg-[#EEF8FF]">
    <div class="px-8 relative content -translate-y-6 z-20
         md:px-0">
        <div class="service drop-shadow-lg py-2 grid grid-cols-2 gap-4
         bg-[#0C517F] text-xs text-white text-center rounded-lg
         md:flex md:justify-between md:px-20 md:py-8">
            <div class="service-item flex gap-2 justify-center">
                <img src="{{asset('assets/images/service/01.svg')}}" alt="">
                <p class="uppercase">{{__('100+ направлений')}}</p>
            </div>
            <div class="service-item flex gap-2 justify-center">
                <img src="{{asset('assets/images/service/02.svg')}}" alt="">
                <p class="uppercase">{{__('Выгодные цены')}}</p>
            </div>
            <div class="service-item flex gap-2 justify-center">
                <img src="{{asset('assets/images/service/03.svg')}}" alt="">
                <p class="uppercase">{{__('Онлайн Резервация')}}</p>
            </div>
            <div class="service-item flex gap-2 justify-center">
                <img src="{{asset('assets/images/service/03.svg')}}" alt="">
                <p class="uppercase">{{__('Безопасная оплата')}}</p>
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
@foreach($tourTypesContent as $t)
    @if($loop->iteration === 2)
        <section class="sale-tours relative  bg-[#EEF8FF]">
            <div class="h-36 bg-[#0C517F] flex justify-center drop-shadow-lg">
                <img class="h-20" src="{{asset('assets/images/sale-tours.png')}}" alt="">
            </div>
            <div class="content md:px-0">
                @include('sale-tour-slider')
            </div>
        </section>
    @else
        <section class="tour bg-white m-0">
            <div class="content px-8 md:px-0">
                <div class="tour-type-item">
                    <p class="uppercase text-center my-6 font-semibold text-[#0C517F] text-xl">{{$t->name}}</p>
                    <div class="dots text-center mb-4">
                        <span> &#9642;</span>
                        <span> &#9642;</span>
                        <span> &#9642;</span>
                    </div>
                    <div class="grid grid-cols-1 gap-y-8 md:grid md:grid-cols-4 md:gap-4">
                        @foreach($t->tours as $tour)
                            @include('components.tour.item', ['tour' => $tour])
                        @endforeach
                    </div>
                    <div class="my-8 flex justify-center">
                        <a class=" text-[#0C517F] text-sm font-medium uppercase border border-solid border-[#0C517F] rounded-lg py-3 px-7 hover:bg-[#EEF8FF]" href="{{route('tour-type', $t->id)}}">{{__('показать все')}}</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endforeach
<section class="bg-[#EEF8FF]">
    <div class="content px-8 md:px-0">
        <p class="text-[#0C517F] text-center text-xl">{{__('мы работаем для Вас')}}</p>
        <p class="text-[#0C517F] text-center text-xl font-bold uppercase">{{__('наша команда')}}</p>
        <div class="dots text-center mb-4">
            <span> &#9642;</span>
            <span> &#9642;</span>
            <span> &#9642;</span>
        </div>
        <div class="persons md:grid md:grid-cols-3 md:gap-4">
            @foreach($persons as $p)
                @include('components.person.item', ['person' => $p])
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')

</body>
</html>
