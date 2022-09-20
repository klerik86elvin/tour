<!doctype html>
<html lang="en">
@include('layouts.head')
<title>Document</title>
<body>
@include('layouts.header')
<section>
    <div class="h-24 md:h-48 relative flex justify-center items-center" style="background-image: url({{asset('assets/images/service-page-img.jpg')}});">
        <div class="label absolute w-full min-h-full bg-[#0C517F] opacity-75"></div>
        <p class="text-white absolute text-2xl font-bold uppercase md:text-3xl">{{$tour->tourType->name}}</p>
    </div>
</section>
<section class="py-4 px-8 md:px-0">
    <div class="content md:flex gap-4">
        <div class="md:w-2/5">
            <img class="w-full" style="" src="{{$tour->getFirstMediaUrl('main', 'thumb')}}" alt="">
        </div>
        <div class="md:w-3/5" style="">
            <div style="background-color: rgba(12,81,127, 0.1)" class="p-4 md:flex md:justify-between">
                <div>
                    <p class="text-2xl font-medium text-[#0C517F]">{{$tour->name}}</p>
                    <p class="text-sm text-[#0C517F]">{{$tour->options}}</p>
                    <p class="text-sm mt-3 text-[#0C517F]">{{$tour->days}}</p>
                </div>
                <div class="">
                    <p class="text-[#0C517F] text-center text-sm mb-2">{{__('Цена тура')}}</p>
                    <div class="bg-white md:block"><p class=" px-4 py-2 text-2xl md:text-3xl text-center font-medium text-[#0C517F]">{{$tour->price}}AZN</p></div>
                </div>
            </div>
            <div class=" md:flex gap-4 mt-4 text-[#404040]">
                <div class="md:w-1/2">
                    <p class="text-sm font-bold md:text-center">{{__('Включено')}}</p>
                    <p class="text-sm whitespace-pre-wrap">{{$tour->inclusions}}</p>
                </div>
                <div class="md:w-1/2">
                    <p class="text-sm font-bold md:text-center">{{__('Не включено')}}</p>
                    <p class="text-sm whitespace-pre-wrap">{{$tour->inclusions}}</p>
                </div>
            </div>
            <div class="mt-4 flex flex-col gap-y-8">
                <div class="flex">
                    <p class="w-24 text-[#404040]">{{__('Страна')}}:   </p>
                    <p class="text-[#0C517F] font-medium">{{$tour->name}}</p>
                </div>
                @foreach($tour->hotels as $h)
                    <div class="flex">
                        <p class="w-24 text-[#404040]">{{__('Отель').' '.$loop->iteration}}:   </p>
                        <p class="text-[#0C517F] font-medium">{{$h->name}}</p>
                    </div>
                @endforeach
                <div class="flex">
                    <p class="w-24 text-[#404040]">{{__('Тип номера')}}:</p>
                    <p class="text-[#0C517F] font-medium">{{$tour->roomType->name}}</p>
                </div>
                <div class="flex">
                    <p class="w-24 text-[#404040]">{{__('Pax')}}:</p>
                    <p class="text-[#0C517F] font-medium">{{$tour->pax->name}}</p>
                </div>
            </div>
            <div class="flex justify-end">
                <a class="flex bg-[#0C517F] w-40 h-12 rounded-lg text-white justify-center items-center" href="#"><span>Booking</span></a>
            </div>
        </div>
    </div>
</section>
<section class="bg-[#EEF8FF]">
    <div class="content ">
        @foreach($tour->dailyPlans as $d)
            <div>
                <p class="px-8 md:px-0 my-2 font-bold text-2xl text-[#0C517F]">{{$d->name}}</p>
                @foreach($d->options as $o)
                    <div class=" mt-4">
                        <p class="px-8 md:px-0 font-bold">{{$o->title}}</p>
                        <div class="md:flex">
                            <p class="px-8 my-4 md:px-0">{{$o->text}}</p>
                            <img  src="{{$o->getFirstMediaUrl('main','thumb')}}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
            @if(!$loop->last)
                <div class="mx-8 md:mx-0  mt-4 border-b border-2 solid border-[#0C517F]"></div>
            @endif
        @endforeach
    </div>

</section>
@include('layouts.footer')
</body>
</html>
