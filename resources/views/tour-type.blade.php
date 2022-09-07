<!doctype html>
<html lang="en">
<title>{{$tourTypeContent->name}}</title>
<body>
@include('layouts.head')
@include('layouts.header')
<section class="tour-type-services bg-[#EEF8FF] py-4">
    <div class="content px-8 md:px-0">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 ">
            <div class="item relative" style="background-image: url(/assets/images/tour-type-services/01.jpg)">
                <div class="layer bg-[#1C7F0C]"></div>
                <p class="font-medium absolute text-white text-lg md:text-2xl">МICE-{{__('услуги')}}</p>
            </div>
            <div class="item relative" style="background-image: url(/assets/images/tour-type-services/02.jpg)">
                <div class="layer  bg-[#0C567F]"></div>
                <p class="font-medium absolute text-white text-lg md:text-2xl">VIP-{{__('услуги')}}</p>
            </div>
            <div class="item relative " style="background-image: url(/assets/images/tour-type-services/03.jpg)">
                <div class="layer bg-[#852929]"></div>
                <p class="font-medium absolute text-white text-lg md:text-2xl">{{__('Услуги гида')}}</p>
            </div>
            <div class="item relative " style="background-image: url(/assets/images/tour-type-services/04.jpg)">
                <div class="layer bg-[#788529]"></div>
                <p class="font-medium absolute text-white text-lg md:text-2xl">{{__('Транспортные услуи')}}</p>
            </div>
        </div>
        <div class="bg-[#0C517F] py-6 my-8 rounded-lg drop-shadow-lg">
            <p class="text-white text-center text-xl font-bold uppercase">{{$tourTypeContent->name}}</p>
        </div>
        <div class="body">
            <p class="text-[#0C517F] text-lg text-center font-semibold">{{$tourTypeContent->text}}</p>
        </div>
    </div>
</section>
<section class="py-4 px-8 md:px-0">
    <div class="content grid grid-cols-1 gap-y-8 md:grid md:grid-cols-4 md:gap-4">
        @foreach($tours as $t)
            @include('components.tour.item', ['tour' => $t])
        @if($loop->iteration == 8)
    </div>
    <div class="content py-4">
        <img class=" w-full" src="{{$banner->getFirstMediaUrl('main', 'thumb')}}" alt="">
    </div>
    <div class="content grid grid-cols-1 gap-y-8 md:grid md:grid-cols-4 md:gap-4">
        @endif
        @endforeach
    </div>
    @include('components.pagination', ['paginator' => $tours])
</section>
@include('layouts.footer')
</body>
</html>
