<!doctype html>
<html lang="en">
<title  class="uppercase">{{__('услуги')}}</title>
@include('layouts.head')
<body>
@include('layouts.header')
<section>
    <div class="h-24 md:h-48 relative flex justify-center items-center" style="background-image: url({{asset('assets/images/service-page-img.jpg')}});">
        <div class="label absolute w-full min-h-full bg-[#0C517F] opacity-75"></div>
        <p class="text-white absolute text-2xl font-bold uppercase md:text-3xl">{{__('услуги')}}</p>
    </div>
</section>
<section class="bg-[#EEF8FF] py-4">
    <div class="content px-8 grid grid-cols-1 gap-y-8 auto-cols-max  md:px-0 md:grid md:grid-cols-3 md:gap-24">
        @foreach($services as $s)
            <div class="flex flex-col gap-y-4 text-[#0C517F]">
                <div class="icon flex justify-center">
                    <img class="w-24" src={{$s->getFirstMediaUrl('main', 'thumb')}} alt="">
                </div>
                <div class="name h-14">
                    <p class=" text-center font-bold text-2xl">{{$s->name}}</p>
                </div>
                <div>
                    <p class="font-medium text-justify text-lg">{{$s->text}}</p>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex justify-center py-2 bg-[#0C517F] rounded-lg ">
                        <a class="text-white text-center" href="{{route('contact-us')}}">{{__('Написать письмо')}}</a>
                    </div>
                    <div class="flex justify-center border py-2 border-solid border-[#0C517F] rounded-lg ">
                        <a class="text-[#0C517F]" href="https://wa.me/994555339488" target="_blank">{{__('Задать вопрос в WhatsApp')}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@include('layouts.footer')
</body>
</html>
